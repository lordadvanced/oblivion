(function(e){var t=function(t,n){this.$element=e(t);this.options=e.extend({},e.fn.clockface.defaults,n,this.$element.data());this.init()};t.prototype={constructor:t,init:function(){this.$clockface=e(e.fn.clockface.template);this.$clockface.find(".l1 .cell, .left.cell").html('<div class="outer"></div><div class="inner"></div>');this.$clockface.find(".l5 .cell, .right.cell").html('<div class="inner"></div><div class="outer"></div>');this.$clockface.hide();this.$outer=this.$clockface.find(".outer");this.$inner=this.$clockface.find(".inner");this.$ampm=this.$clockface.find(".ampm");this.ampm=null;this.hour=null;this.minute=null;this.$ampm.click(e.proxy(this.clickAmPm,this));this.$clockface.on("click",".cell",e.proxy(this.click,this));this.parseFormat();this.prepareRegexp();this.ampmtext=this.is24?{am:"12-23",pm:"0-11"}:{am:"AM",pm:"PM"};this.isInline=this.$element.is("div");if(this.isInline){this.$clockface.addClass("clockface-inline").appendTo(this.$element)}else{this.$clockface.addClass("dropdown-menu").appendTo("body");if(this.options.trigger==="focus"){this.$element.on("focus.clockface",e.proxy(function(e){this.show()},this))}e(document).off("click.clockface").on("click.clockface",e.proxy(function(t){var n=e(t.target);if(n.closest(".clockface").length){return}e(".clockface-open").each(function(){if(this===t.target){return}e(this).clockface("hide")})},this))}this.fill("minute")},show:function(t){if(this.$clockface.is(":visible")){return}if(!this.isInline){if(t===undefined){t=this.$element.val()}this.$element.addClass("clockface-open");this.$element.on("keydown.clockface",e.proxy(this.keydown,this));this.place();e(window).on("resize.clockface",e.proxy(this.place,this))}this.$clockface.show();this.setTime(t);this.$element.triggerHandler("shown.clockface",this.getTime(true))},hide:function(){this.$clockface.hide();if(!this.isInline){this.$element.removeClass("clockface-open");this.$element.off("keydown.clockface");e(window).off("resize.clockface")}this.$element.triggerHandler("hidden.clockface",this.getTime(true))},toggle:function(e){if(this.$clockface.is(":visible")){this.hide()}else{this.show(e)}},setTime:function(e){var t,n,r,i="am";if(e===undefined){if(this.ampm===null){this.setAmPm("am")}return}if(e instanceof Date){n=e.getHours();r=e.getMinutes()}if(typeof e==="string"&&e.length){t=this.parseTime(e);if(t.hour===24){t.hour=0}n=t.hour;r=t.minute;i=t.ampm}if(n>11&&n<24){i="pm";if(!this.is24&&n>12){n-=12}}else if(n>=0&&n<11){if(this.is24||n===0){i="am"}}this.setAmPm(i);this.setHour(n);this.setMinute(r)},setAmPm:function(e){if(e===this.ampm){return}else{this.ampm=e==="am"?"am":"pm"}this.$ampm.text(this.ampmtext[this.ampm]);this.fill("hour");this.highlight("hour")},setHour:function(e){e=parseInt(e,10);e=isNaN(e)?null:e;if(e<0||e>23){e=null}if(e===this.hour){return}else{this.hour=e}this.highlight("hour")},setMinute:function(e){e=parseInt(e,10);e=isNaN(e)?null:e;if(e<0||e>59){e=null}if(e===this.minute){return}else{this.minute=e}this.highlight("minute")},highlight:function(t){var n,r=this.getValues(t),i=t==="minute"?this.minute:this.hour,s=t==="minute"?this.$outer:this.$inner;s.removeClass("active");n=e.inArray(i,r);if(n>=0){s.eq(n).addClass("active")}},fill:function(t){var n=this.getValues(t),r=t==="minute"?this.$outer:this.$inner,i=t==="minute";r.each(function(t){var r=n[t];if(i&&r<10){r="0"+r}e(this).text(r)})},getValues:function(t){var n=[11,0,1,10,2,9,3,8,4,7,6,5],r=[];if(t==="minute"){e.each(n,function(e,t){r[e]=t*5})}else if(this.ampm==="pm"){if(this.is24){e.each(n,function(e,t){r[e]=t+12})}else{r=n.slice();r[1]=12}}else{r=n.slice()}return r},click:function(t){var n=e(t.target),r=n.hasClass("active")?null:n.text();if(n.hasClass("inner")){this.setHour(r)}else{this.setMinute(r)}if(!this.isInline){this.$element.val(this.getTime())}this.$element.triggerHandler("pick.clockface",this.getTime(true))},clickAmPm:function(e){e.preventDefault();this.setAmPm(this.ampm==="am"?"pm":"am");if(!this.isInline&&!this.is24){this.$element.val(this.getTime())}this.$element.triggerHandler("pick.clockface",this.getTime(true))},place:function(){var t=parseInt(this.$element.parents().filter(function(){return e(this).css("z-index")!="auto"}).first().css("z-index"),10)+10,n=this.$element.offset();this.$clockface.css({top:n.top+this.$element.outerHeight(),left:n.left,zIndex:t})},keydown:function(t){if(/^(9|27|13)$/.test(t.which)){this.hide();return}clearTimeout(this.timer);this.timer=setTimeout(e.proxy(function(){this.setTime(this.$element.val())},this),500)},parseFormat:function(){var t=this.options.format,n="HH",r="mm";e.each(["HH","hh","H","h"],function(e,r){if(t.indexOf(r)!==-1){n=r;return false}});e.each(["mm","m"],function(e,n){if(t.indexOf(n)!==-1){r=n;return false}});this.is24=n.indexOf("H")!==-1;this.hFormat=n;this.mFormat=r},parseTime:function(t){var n=null,r=null,i="am",s=[],o;t=e.trim(t);if(this.regexpSep){s=t.match(this.regexpSep)}if(s&&s.length){n=s[1]?parseInt(s[1],10):null;r=s[2]?parseInt(s[2],10):null;i=!s[3]||s[3].toLowerCase()==="a"?"am":"pm"}else{t=t.split("").reverse().join("").replace(/\s/g,"");s=t.match(this.regexpNoSep);if(s&&s.length){i=!s[1]||s[1].toLowerCase()==="a"?"am":"pm";o=s[2].split("").reverse().join("");switch(o.length){case 1:n=parseInt(o,10);break;case 2:n=parseInt(o,10);if(n>24){n=parseInt(o[0],10);r=parseInt(o[1],10)}break;case 3:n=parseInt(o[0],10);r=parseInt(o[1]+o[2],10);if(r>59){n=parseInt(o[0]+o[1],10);r=parseInt(o[2],10);if(n>24){n=null;r=null}}break;case 4:n=parseInt(o[0]+o[1],10);r=parseInt(o[2]+o[3],10);if(n>24){n=null}if(r>59){r=null}}}}return{hour:n,minute:r,ampm:i}},prepareRegexp:function(){var e=this.options.format.match(/h\s*([^hm]?)\s*m/i);if(e&&e.length){e=e[1]}this.separator=e;this.regexpSep=this.separator&&this.separator.length?new RegExp("(\\d\\d?)\\s*\\"+this.separator+"\\s*(\\d?\\d?)\\s*(a|p)?","i"):null;this.regexpNoSep=new RegExp("(a|p)?\\s*(\\d{1,4})","i")},getTime:function(e){if(e===true){return{hour:this.hour,minute:this.minute,ampm:this.ampm}}var t=this.hour!==null?this.hour+"":"",n=this.minute!==null?this.minute+"":"",r=this.options.format;if(!t.length&&!n.length){return""}if(this.hFormat.length>1&&t.length===1){t="0"+t}if(this.mFormat.length>1&&n.length===1){n="0"+n}if(!n.length&&this.separator){r=r.replace(this.separator,"")}r=r.replace(this.hFormat,t).replace(this.mFormat,n);if(!this.is24){if(r.indexOf("A")!==-1){r=r.replace("A",this.ampm.toUpperCase())}else{r=r.replace("a",this.ampm)}}return r},destroy:function(){this.hide();this.$clockface.remove();if(!this.isInline&&this.options.trigger==="focus"){this.$element.off("focus.clockface")}}};e.fn.clockface=function(n){var r,i=Array.apply(null,arguments);i.shift();if(n==="getTime"&&this.length&&(r=this.eq(0).data("clockface"))){return r.getTime.apply(r,i)}return this.each(function(){var r=e(this),s=r.data("clockface"),o=typeof n=="object"&&n;if(!s){r.data("clockface",s=new t(this,o))}if(typeof n=="string"&&typeof s[n]=="function"){s[n].apply(s,i)}})};e.fn.clockface.defaults={format:"H:mm",trigger:"focus"};e.fn.clockface.template=""+'<div class="clockface">'+'<div class="l1">'+'<div class="cell"></div>'+'<div class="cell"></div>'+'<div class="cell"></div>'+"</div>"+'<div class="l2">'+'<div class="cell left"></div>'+'<div class="cell right"></div>'+"</div>"+'<div class="l3">'+'<div class="cell left"></div>'+'<div class="cell right"></div>'+'<div class="center"><a href="#" class="ampm"></a></div>'+"</div>"+'<div class="l4">'+'<div class="cell left"></div>'+'<div class="cell right"></div>'+"</div>"+'<div class="l5">'+'<div class="cell"></div>'+'<div class="cell"></div>'+'<div class="cell"></div>'+"</div>"+"</div>"})(window.jQuery)