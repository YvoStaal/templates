(function(){
  if(!!mw.magicSlider) return false;

  mw._magicSliderDefaults = {
    autoRotate:false,
    autoRotateInterval:7000,
    speed:900,
  }

  mw._magicSlider = function(options){
      var options = $.extend({}, mw._magicSliderDefaults, options);
      var obj = this;
      this.options = options;
      var slider = mw.$(options.slider).eq(0);
      if(!!slider[0].magicSlider) return slider[0].magicSlider;
      slider[0].magicSlider = this;
      this.hovered = false;
      slider.hover(function(){
        obj.hovered = true;
      }, function(){
        obj.hovered = false;
      });
      this.slider = slider;
      this.slides =  mw.$('.magic-rotator-slide', [0]);
      this.active = this.slides.eq(0);
      this.slider.height(this.active.height());
      this.active.addClass('active');
      mw.$('.magic-slider-next').bind('click', function(e){
        e.preventDefault();
        obj.next();
      });
      mw.$('.magic-slider-previous').bind('click', function(e){
        e.preventDefault();
        obj.prev();
      });
      if(options.autoRotate){
        this.autoRotate();
      }
  }

  mw._magicSlider.prototype = {
    sliding:false,
    goto:function(index){
       if(this.sliding) return false;
        this.sliding = true;
        var thenew = this.slides.eq(index);
        if(this.active[0] !== thenew[0]){
            this.beforeSlide(thenew[0]);
            this.active.fadeOut(this.options.speed);
            var obj = this;
            thenew.fadeIn(this.options.speed, function(){
              obj.afterSlide();
              obj.sliding = false;
            });
            this.active = thenew;
        }
    },
    _execEffectIn:function(item, callback){
        var effect = item.dataset('effectin');
        if( effect != '' && typeof this.effects[effect] === 'function'){
            this.effects[effect](item, function(){
                callback.call();
            });
        }
        else{
            callback.call();
        }
    },
    _execMethod : function(method){

    },
    next:function(){
        if(this.sliding) return false;
        this.sliding = true;
        var next = this.active.next('.magic-rotator-slide');
        if(next.length === 0){
          var next = this.slides.eq(0);
        }
        this.beforeSlide(next[0]);

        this.active.fadeOut(this.options.speed);
        var obj = this;
        next.fadeIn(this.options.speed , function(){
          obj.afterSlide();
          obj.sliding = false;
        })
        this.active = next;
    },
    prev:function(){
        if(this.sliding) return false;
        this.sliding = true;
        var prev = this.active.prev('.magic-rotator-slide');
        if(prev.length === 0){
          var prev = this.slides.eq(this.slides.length - 1);
        }
        d(prev)
        this.beforeSlide(prev[0]);
        this.active.fadeOut(this.options.speed);
        var obj = this;
        prev.fadeIn(this.options.speed, function(){
            obj.afterSlide();
            if(this.sliding) return false;
            obj.sliding = false;
        });
        this.active = prev;
    },
    autoRotate:function(){
      var obj = this;
      this.interval = setInterval(function(){
        if(obj.hovered === false){
            obj.next();
        }
      }, this.options.autoRotateInterval)
    },
    stopAutorotate: function(){
      clearInterval(this.interval);
    },
    effects : {
        build : function(slide, callback){
            mw.$('.magic-rotator-primary', slide).animo( { animation: ['fadeInDown', 'tada'], duration: 0.5, keep: true } , function(){
                if(typeof callback === 'function'){
                  callback.call()
                }
            });
        },
        buildOut : function(slide, callback){
            mw.$('.magic-rotator-primary', this.active).animo( { animation: ['fadeOutUp'], duration: 0.5, keep: false } , function(){
                if(typeof callback === 'function'){
                  callback.call()
                }
            });
        }
    },
    methods:{
      fade:function(el, inout, callback){
        var obj = this;
        if(inout == 'in'){
            $(el).fadeIn(obj.options.speed, function(){
                callback.call()
            })
        }
        else if(inout == 'out'){
            $(el).fadeOut(obj.options.speed, function(){
                callback.call()
            })
        }
      }
    },
    afterSlide:function(){
        $(this.active).addClass('active');
        this.slider.height(this.active.height());
    },
    beforeSlide:function(next){
        $(this.active).removeClass('active');
        this.slider[0].style.minHeight = next.clientHeight + 'px';
    }
  }

  mw.magicSlider = function(options){
    return new mw._magicSlider(options);
  }
  jQuery.fn.magicSlider = function(options){
    if(typeof options === 'string'){
        var obj = {};
    }
    else{
        var obj = options || {};
    }

    obj.slider = this;
    var slider = mw.magicSlider(obj);
    if(typeof options === 'string' && typeof slider[options] === 'function'){
        slider[options]();
    }
    return slider;
  }

})();

