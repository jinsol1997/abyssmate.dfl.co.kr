"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

(function (factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as anonymous module.
    define(['jquery'], factory);
  } else if ((typeof exports === "undefined" ? "undefined" : _typeof(exports)) === 'object') {
    // Node / CommonJS
    factory(require('jquery'));
  } else {
    // Browser globals.
    factory(jQuery);
  }
})(function ($) {
  'use strict';
  /* Defind Plugin */

  var _PLUGIN_ = 'dnSlide';
  var _VERSION_ = '1.0.0';

  if ($[_PLUGIN_] && $[_PLUGIN_].version > _VERSION_) {
    return;
  }
  /* Init Object */


  $[_PLUGIN_] = function ($container, options) {
    var self = this;
    this.container = $container;
    this.options = options;
    this.api = ["init", "destroy", "hide", "show"];
    this.init();
    return this;
  };

  $[_PLUGIN_].version = _VERSION_;
  $[_PLUGIN_].defaults = {
    "switch": "normal",
    "isOddShow": false,
    //�뜻빊�뜻삸��쨳�뜸�凉좑펽容섋����誤곩쨳�띌삻閭�뵗鵝�
    "width": 800,
    //dnSlide Total Width
    "height": 234,
    //dnSlide Total Height
    "dnSlideFirstWidth": 600,
    //First Picture Width
    "dnSlideFirstHeight": 234,
    //First Picture Height
    "autoPlay": false,
    "delay": 5000,
    "scale": 0.9,
    "speed": 500,
    "response": false,
    "verticalAlign": "middle",
    "afterClickBtnFn": null
  };
  /* Prototype Function */

  $[_PLUGIN_].prototype = {
    init: function init() {
      var _this_ = this;

      this.data();
      this.settingDOM();
      this.isIE7 = /MSIE 6.0|MSIE 7.0/gi.test(window.navigator.userAgent);
      this.dnSlideMain = this.container.find('.dnSlide-main');
      this.dnSlideItems = this.container.find('ul.dnSlide-list');
      this.firstItem = this.container.find('ul.dnSlide-list > li:first-child');
      this.dnSlideItemsLength = this.container.find('ul.dnSlide-list>li').length;
      this.dnSlideFirstItem = this.container.find('ul.dnSlide-list>li:first-child');
      this.dnSlideLastItem = this.container.find('ul.dnSlide-list>li:last-child');
      if (this.options.isOddShow) this.isEvenPicNum();
      if (this.options.response) this.container.addClass('dn-response');
      this.prevBtn = this.container.find('.dnSlide-left-btn');
      this.nextBtn = this.container.find('.dnSlide-right-btn');
      this.prevBtn = this.container.find('div.dnSlide-left-btn');
      this.nextBtn = this.container.find('div.dnSlide-right-btn');
      this.rotateFlag = true;
      this.countSettingValue();
      this.setPositionValue();
      this.prevBtn.off().on('click', function (event) {
        event.stopPropagation();
        var afterClickPrevBtn = _this_.options.afterClickPrevBtnFn;

        if (_this_.rotateFlag) {
          _this_.rotateFlag = false;

          _this_.dnSlideRotate('right');
        }

        if (typeof afterClickPrevBtn === "function" && afterClickPrevBtn) afterClickPrevBtn();
      });
      this.nextBtn.off().on('click', function (event) {
        event.stopPropagation();
        var afterClickNextBtn = _this_.options.afterClickNextBtnFn;

        if (_this_.rotateFlag) {
          _this_.rotateFlag = false;

          _this_.dnSlideRotate('left');
        }

        if (typeof afterClickNextBtn === "function" && afterClickNextBtn) afterClickNextBtn();
      });
      $(window).resize(function () {
        _this_.WndwResize();
      });

      if (this.options.autoPlay) {
        this.autoPlay();
        this.container.hover(function () {
          clearTimeout(_this_.timer);
        }, function () {
          _this_.autoPlay();
        });
      }
    },
    data: function data() {
      var data = this.container.data(_PLUGIN_);

      if (!data) {
        this.container.data(_PLUGIN_, {
          target: this.container
        });
      }
    },
    destroy: function destroy() {
      this.container.empty().html(this.defalutHtml);
    },
    hide: function hide(callback) {
      this.container.addClass('dnSlide-hide');
      if (callback && typeof callback === "function") callback();
    },
    show: function show(callback) {
      this.container.removeClass('dnSlide-hide');
      if (callback && typeof callback === "function") callback();
    },
    settingDOM: function settingDOM() {
      var _this_ = this;

      this.defalutHtml = this.container.html();
      this.resourceSrcArr = this.container.find('img').map(function (i, e) {
        return e.src;
      });
      var ulDOM = this.container.html('<ul class="dnSlide-list"></ul>').find('.dnSlide-list');
      jQuery.each(this.resourceSrcArr, function (i, e) {
        ulDOM.append('<li class="dnSlide-item"><a href="javascript:void(0)"><img class="slide-img" src="' + _this_.resourceSrcArr[i] + '" width="100%"></a></li>');
      });
      ulDOM.parents('.dnSlide-main').append("<div class='dnSlide-btn dnSlide-left-btn'></div>", "<div class='dnSlide-btn dnSlide-right-btn'></div>");
    },
    WndwResize: function WndwResize() {
      var _this_ = this,
          timeId = '';

      if (timeId) {
        clearTimeout(timeId);
        timeId = null;
      }

      timeId = setTimeout(function () {
        _this_.countSettingValue();

        _this_.setPositionValue();
      }, 250);
    },
    //��맔躍�쐣�ゅ츣阿됭�營�
    getCustomSetting: function getCustomSetting() {
      var setting = this.setting;

      if (setting && setting !== "") {
        return setting;
      } else {
        return {};
      }
    },
    //溫양쉰容섋��쇌말誤곫삸訝뷰틙壤볡뵪�룝엶�백퍡溫ㅵ콪�㎩릮CSS阿잏쎑野배컘��
    countSettingValue: function countSettingValue() {
      var _this_ = this,
          response = this.options.response,
          precent = 100 + "%",
          zIndex = Math.floor(this.dnSlideItemsLength / 2),
          MainHei = response ? this.dnSlideFirstItem.find(".slide-img").height() : this.options.height,
          MainWid = !response ? this.options.width : null,
          FirstWid = !response ? this.options.dnSlideFirstWidth : null,
          wid = response ? (this.container.width() - this.firstItem.width()) / 2 : (this.options.width - this.options.dnSlideFirstWidth) / 2;

      this.container.css({
        "width": MainWid,
        "height": MainHei
      });
      this.firstItem.css({
        "width": FirstWid,
        "height": response ? precent : this.options.dnSlideFirstHeight
      });
      this.prevBtn.css({
        "width": wid,
        "height": response ? precent : this.options.height
      });
      this.nextBtn.css({
        "width": wid,
        "height": response ? precent : this.options.height
      });
      this.dnSlideFirstItem.css({
        "left": wid,
        "zIndex": zIndex
      });
    },
    //溫양쉰容섋��좄슬瓦쎿씎�뜻��됧쎗�뉐�佯붺쉪鵝띸쉰
    setPositionValue: function setPositionValue() {
      var self_ = this,
          response = this.options.response,
          level = Math.floor(this.dnSlideItemsLength / 2),
          items = this.container.find('.dnSlide-list > li').slice(1),
          leftItems = items.slice(0, items.length / 2),
          rightItems = items.slice(items.length / 2),
          optionImgLeft = response ? (this.container.width() - this.firstItem.width()) / 2 : (this.options.width - this.options.dnSlideFirstWidth) / 2,
          gap = optionImgLeft / level,
          dw = response ? this.dnSlideFirstItem.width() : this.options.dnSlideFirstWidth,
          dh = response ? this.dnSlideFirstItem.height() : this.options.dnSlideFirstHeight;
      leftItems.each(function (i, e) {
        dw *= self_.options.scale;
        dh *= self_.options.scale;
        var j = i;
        $(e).css({
          "width": dw,
          "height": dh,
          "zIndex": --level,
          "opacity": 1 / ++j,
          "left": optionImgLeft + self_.dnSlideFirstItem.width() + ++i * gap - dw,
          "top": self_.settingVerticalAlign(dh)
        });
      });
      var rw = leftItems.last().width(),
          rh = leftItems.last().height(),
          oloop = Math.floor(this.dnSlideItemsLength / 2);
      rightItems.each(function (i, e) {
        $(e).css({
          "width": rw,
          "height": rh,
          "zIndex": level++,
          "opacity": 1 / oloop--,
          "left": gap * i,
          "top": self_.settingVerticalAlign(rh)
        });
        rw = rw / self_.options.scale;
        rh = rh / self_.options.scale;
      });
    },
    //溫양쉰�귞쎍掠끺릎鵝띸쉰
    settingVerticalAlign: function settingVerticalAlign(height) {
      var verticalAlign = this.options.verticalAlign,
          top,
          wid = this.options.response ? this.dnSlideFirstItem.find(".slide-img").height() : this.options.height;

      if (verticalAlign === 'middle') {
        top = (wid - height) / 2;
      } else if (verticalAlign === 'top') {
        top = 0;
      } else if (verticalAlign === 'bottom') {
        top = wid - height;
      } else {
        top = (wid - height) / 2;
      }

      return top;
    },
    //�묈랩�묈뤂雅뗤뻑
    dnSlideRotate: function dnSlideRotate(dir) {
      var self_ = this,
          indexArr = [],
          arr = [];

      if (dir === 'left') {
        this.dnSlideItems.find('li').each(function (index, el) {
          var prev = $(el).prev().get(0) ? $(el).prev() : self_.dnSlideLastItem,
              width = prev.width(),
              height = prev.height(),
              zIndex = prev.css('zIndex'),
              top = prev.css('top'),
              left = prev.css('left'),
              opacity = prev.css('opacity');
          indexArr.push(zIndex);
          $(el).animate({
            width: width,
            height: height,
            //zIndex: zIndex,
            top: top,
            left: left,
            opacity: opacity
          }, self_.options.speed, function () {
            self_.rotateFlag = true;
          });
        }); //溫쯼-index饔у뙑�덃옖鴉섇뀍雅롥닽�꾣룓遙섆벡雅�

        this.dnSlideItems.find('li').each(function (i) {
          $(this).css("zIndex", indexArr[i]);
          arr.push(parseInt(indexArr[i]));
        });
      } else if (dir === 'right') {
        this.dnSlideItems.find('li').each(function (index, el) {
          var next = $(el).next().get(0) ? $(el).next() : self_.dnSlideFirstItem,
              width = next.width(),
              height = next.height(),
              zIndex = next.css('zIndex'),
              top = next.css('top'),
              left = next.css('left'),
              opacity = next.css('opacity');
          indexArr.push(zIndex);
          $(el).animate({
            width: width,
            height: height,
            //zIndex: zIndex,
            top: top,
            left: left,
            opacity: opacity
          }, function () {
            self_.rotateFlag = true;
          });
        });
        this.dnSlideItems.find('li').each(function (i) {
          $(this).css("zIndex", indexArr[i]);
          arr.push(parseInt(indexArr[i]));
        });
      }

      var max = Math.max.apply(null, arr);
      var i = jQuery.inArray(max, arr);
      this.options.afterClickBtnFn.apply(this, [i]);
    },
    //��맔�ゅ뒯��붂
    autoPlay: function autoPlay() {
      var self_ = this;
      this.timer = setInterval(function () {
        self_.dnSlideRotate('left');
      }, self_.options.delay);
    },
    //�꿩�訝듾폖�꾢쎗�뉑빊�뤶맏�뷸빊竊덆�싪퓝�롦룖�ζ뼶凉뤶퓷�곩겤�겼쎗�뉑빊�륅펹
    isEvenPicNum: function isEvenPicNum() {
      if (this.dnSlideItemsLength % 2 === 0) {
        this.dnSlideItems.append(this.dnSlideFirstItem.clone());
        this.dnSlideItemsLength = this.dnSlide.find('ul.dnSlide-list>li').length;
        this.dnSlideFirstItem = this.dnSlide.find('ul.dnSlide-list>li:first-child');
        this.dnSlideLastItem = this.dnSlide.find('ul.dnSlide-list>li:last-child');
      }
    },
    _api_: function _api_() {
      var self_ = this,
          api = {};
      $.each(this.api, function (i) {
        var fn = this;

        api[fn] = function () {
          var re = self_[fn].apply(self_, arguments);
          return typeof re == 'undefined' ? api : re;
        };
      });
      return api;
    }
  };
  /* The jQuery plugin */

  $.fn[_PLUGIN_] = function (options) {
    options = $.extend(true, {}, $[_PLUGIN_].defaults, options);
    return this.each(function () {
      $(this).data(_PLUGIN_, new $[_PLUGIN_]($(this), options)._api_());
      $(this).addClass('done');
    });
  };
});