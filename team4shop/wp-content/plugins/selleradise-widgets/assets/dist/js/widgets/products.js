(()=>{"use strict";var e={};function t(e){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function n(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function o(e,t,r){return(o="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(e,t,r){var n=function(e,t){for(;!Object.prototype.hasOwnProperty.call(e,t)&&null!==(e=s(e)););return e}(e,t);if(n){var o=Object.getOwnPropertyDescriptor(n,t);return o.get?o.get.call(r):o.value}})(e,t,r||e)}function i(e,t){return(i=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}function c(e){var t=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}();return function(){var r,n=s(e);if(t){var o=s(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return l(this,r)}}function l(e,r){return!r||"object"!==t(r)&&"function"!=typeof r?function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}(e):r}function s(e){return(s=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}e.d=(t,r)=>{for(var n in r)e.o(r,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:r[n]})},e.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t);var u=function(e){!function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&i(e,t)}(f,elementorModules.frontend.handlers.Base);var t,l,u,a=c(f);function f(){return r(this,f),a.apply(this,arguments)}return t=f,(l=[{key:"onInit",value:function(){o(s(f.prototype),"onInit",this).call(this),this.init()}},{key:"init",value:function(){this.isEdit&&Selleradise.lazyLoad();var e=this.getElementSettings(),t={slidesPerView:function(){switch(e.card_type){case"list":return 1;case"compact":return 2.1;default:return 1.2}}},r={slidesPerView:function(){switch(e.card_type){case"list":return 1.5;case"compact":return 3.1;default:return 2.4}}},n={slidesPerView:function(){switch(e.card_type){case"list":return 2.635;case"compact":return 6.25;default:return 4}}};new Swiper(this.$element[0].querySelector(".selleradiseWidgets_Products__slider"),{duration:600,autoHeight:!0,lazy:{loadPrevNext:!1},keyboard:{enabled:!0,onlyInViewport:!0},slidesPerView:t.slidesPerView(),spaceBetween:25,watchSlidesVisibility:!0,navigation:{nextEl:this.$element[0].querySelector(".selleradiseWidgets_Products__slider-button--right"),prevEl:this.$element[0].querySelector(".selleradiseWidgets_Products__slider-button--left")},resizeObserver:this.isEdit,breakpoints:{767:{slidesPerView:r.slidesPerView(),spaceBetween:25},1025:{slidesPerView:n.slidesPerView(),spaceBetween:55}}})}}])&&n(t.prototype,l),u&&n(t,u),f}();jQuery(window).on("elementor/frontend/init",(function(){elementorFrontend.hooks.addAction("frontend/element_ready/selleradise-products.default",(function(e){elementorFrontend.elementsHandler.addHandler(u,{$element:e})}))}))})();