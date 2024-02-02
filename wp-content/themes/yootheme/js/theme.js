/*! YOOtheme Pro v4.2.12 | https://yootheme.com */

(function(n,e){"use strict";const d={async connected(){this.apply(e.hasAttr(this.$el,"tm-header-transparent")),this.section=await c(),this.apply(e.hasAttr(this.section,"tm-header-transparent")),this.placeholder=e.hasClass(this.$el,"tm-header-overlay")&&!e.hasClass(this.section,"tm-header-transparent-no-placeholder"),this.placeholder&&e.observeResize(this.$el,()=>this.$emit()),this.$emit()},update:[{read(){return this.placeholder&&this.$el.offsetHeight?{height:this.$el.offsetHeight}:!1},write({height:s}){const t=e.$(".tm-header-placeholder",this.section)||e.before(e.$(".uk-grid",this.section),'<div class="tm-header-placeholder uk-margin-remove-adjacent">');e.css(t,{height:s})}}],methods:{apply(s){!s||e.hasClass(this.$el,"tm-header-overlay")||(e.addClass(this.$el,"tm-header-overlay"),e.addClass(e.$$(".tm-headerbar-top, .tm-headerbar-bottom, .js-toolbar-transparent"),`uk-${e.css(this.section,"--uk-navbar-color")}`),e.removeClass(e.$$(".tm-headerbar-top, .tm-headerbar-bottom"),"tm-headerbar-default"),e.removeClass(e.$(".js-toolbar-transparent"),"tm-toolbar-default"),(!e.$("[uk-sticky]",this.$el)||e.hasAttr(this.$el,"tm-header-transparent"))&&e.addClass(e.$(".uk-navbar-container",this.$el),"uk-navbar-transparent"))}}},p={async connected(){const s=this.$el.closest("[uk-header]");!s||e.hasAttr(s,"tm-header-transparent")||(this.section=await c(),!(!this.section||!e.hasAttr(this.section,"tm-header-transparent"))&&(this.transparent=!0,this.animation="uk-animation-slide-top",this.clsInactive=`uk-navbar-transparent uk-${e.css(this.section,"--uk-navbar-color")}`,this.active||(this.setActive(!1),m(this.selTarget))))},update:{read(){if(this.transparent)return{start:this.section.offsetHeight<=e.toPx("100vh")?e.offset(this.section).bottom:e.offset(this.section).top+300}},events:["resize"]}};let h;const c=()=>h=h||new Promise(s=>{const t='.tm-header ~ [class*="uk-section"], .tm-header ~ * > [class*="uk-section"]';let r=e.$(t);r?s(r):e.observeMutation(document.body,(a,o)=>{r=e.$(t),r&&(o.disconnect(),s(r))},{childList:!0,subtree:!0})});function m(s){e.css(s,"transition","0s"),requestAnimationFrame(()=>e.css(s,"transition",""))}if(n.component("Header",d),n.mixin(p,"sticky"),e.isRtl){const s={created(){this.$props.pos=e.swap(this.$props.pos,"left","right")}};n.mixin(s,"drop"),n.mixin(s,"tooltip")}e.once(document,"uikit:init",()=>{const{$theme:{i18n:s={}}={}}=window;for(const t in s)n.mixin({i18n:s[t]},t)}),e.ready(()=>{const{$load:s=[],$theme:t={}}=window;function r(a,o){a.length&&a.shift()(o,()=>r(a,o))}if(r(s,t),!CSS.supports("selector(html:has(body))")){for(const a of e.$$(".tm-page > * > .uk-section-overlap:last-child"))e.addClass(a.parentElement,"tm-has-section-overlap"),e.hasClass(a,"uk-section-overlap-flip")&&e.addClass(a.parentElement,"tm-has-section-overlap-flip");for(const a of e.$$(".tm-page > * > .uk-position-z-index-negative"))e.addClass(a.parentElement,"tm-has-z-index-negative")}})})(UIkit,UIkit.util);
