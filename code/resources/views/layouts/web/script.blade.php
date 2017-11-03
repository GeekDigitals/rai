<!-- Vendor JS -->
<script src="{{url('/')}}/web/assets/vendor/jquery/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/jquery/js/jquery.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/jquery/js/jquery-ui.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/jquery/js/moment.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/bootstrap-4.0.0/js/tether.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/bootstrap-4.0.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/bootstrap-4.0.0/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/superslides/js/jquery.superslides.min.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/owl-carousel/js/owl.carousel.js" type="text/javascript"></script>
<script src="{{url('/')}}/web/assets/vendor/flexslider/js/jquery.flexslider.js" type="text/javascript"></script>

<!-- Custom JS -->
<script type="text/javascript">
    /*=== CUSTOM JS PUT HERE ===*/
    $(function() {
        $('.bounce-btn').click (function() {
          $('html, body').animate({scrollTop: $('section').next().offset().top }, 'slow');
          return false;
        });
    });
    
    /*=== AFFIX TOP ===*/
    
    /*var stickySidebar = $('.navbar').offset().top;*/

    $(window).scroll(function() {  
        if ($(window).scrollTop() > 200) {
            $('.navbar').addClass('affix');
        }
        else {
            $('.navbar').removeClass('affix');
        }  
    });
    
    
    /*=== BACK TO TOP BUTTON ===*/
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('#backtop').css('opacity','1');
        } else {
            $('#backtop').css('opacity','0');
        }
    });
    // Animate the scroll to top
    $('#backtop').click(function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 900);
    });

    /*=== SORT TABLE ===*/
    /*$(document).ready(function() {
        $('.sortby select').change(function(){
            if($(this).val() == "1"){
                $('th.theadname').each(function(col) {
                    $('th').removeClass('asc selected');
                    $('th.theadname').addClass('asc selected');
                    sortOrder = 1;
                    var arrData = $('#tableshow').find('tbody >tr:has(td.username)').get(); 
                    arrData.sort(function(a, b) {
                        var val1 = $(a).children('td.username').eq(col).text().toUpperCase();
                        var val2 = $(b).children('td.username').eq(col).text().toUpperCase();
                        if($.isNumeric(val1) && $.isNumeric(val2))
                        return sortOrder == 1 ? val1-val2 : val2-val1;
                        else
                            return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
                    });
                    $.each(arrData, function(index, row) {
                        $('tbody').append(row);
                    });
                });
            }
            else if($(this).val() == "2"){
                $('th.theaddate').each(function(col) {
                    $('th').removeClass('asc selected');
                    $('th.theaddate').addClass('asc selected');
                    sortOrder = 1;
                    var arrData = $('#tableshow').find('tbody >tr:has(td.usersignup)').get(); 
                    arrData.sort(function(a, b) {
                        var val1 = $(a).children('td.usersignup').eq(col).text().toUpperCase();
                        var val2 = $(b).children('td.usersignup').eq(col).text().toUpperCase();
                        if($.isNumeric(val1) && $.isNumeric(val2))
                        return sortOrder == 1 ? val1-val2 : val2-val1;
                        else
                            return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
                    });
                    $.each(arrData, function(index, row) {
                        $('tbody').append(row);
                    });
                });
            }
            else if($(this).val() == "3"){
                $('th.theadcourse').each(function(col) {
                    $('th').removeClass('asc selected');
                    $('th.theaddate').addClass('asc selected');
                    sortOrder = 1;
                    var arrData = $('#tableshow').find('tbody >tr:has(td.usercourse)').get(); 
                    arrData.sort(function(a, b) {
                        var val1 = $(a).children('td.usercourse').eq(col).text().toUpperCase();
                        var val2 = $(b).children('td.usercourse').eq(col).text().toUpperCase();
                        if($.isNumeric(val1) && $.isNumeric(val2))
                        return sortOrder == 1 ? val1-val2 : val2-val1;
                        else
                            return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
                    });
                    $.each(arrData, function(index, row) {
                        $('tbody').append(row);
                    });
                });
            }
        });
    });*/
    /*=== ADD CLASS / CSS WHEN NOT HOMEPAGE ===*/
    /*$(window).load(function() {
        var str=window.location.href;

        if("{{ url('/') }}/en" == str || "{{ url('/') }}/id" == str){
            $('#container-content #main-header .navbar-fat').css('background','transparent');
            $('#container-content #bottom').css('position','absolute');
            $('#main-nav').addClass('nav-white');
            $('#main-nav').removeClass('nav-black');
            $('.drop-show').hide();
            $('.btn-book-header').hide();
            $("#main-logo").attr("src","{{ url('/') }}/web/assets/images/logo-white.png");
        }
        else {
            $('#main-nav').addClass('nav-black');
            $('#main-nav').removeClass('nav-white');
            $("#main-logo").attr("src","{{ url('/') }}/web/assets/images/logo.png");
        }
    });*/

    /*=== PARALLAX ===*/
    (function(){

        var parallax = document.querySelectorAll(".parallax"),
        speed = 0.5;

        window.onscroll = function(){
            [].slice.call(parallax).forEach(function(el,i){

                var windowYOffset = window.pageYOffset,
                elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

                el.style.backgroundPosition = elBackgrounPos;

            });
        };

    })();
    
    /*=== Load More ===*/
    $(function () {
        $(".product-item").slice(0, 1).show();
        $("#productload").on('click', function (e) {
            e.preventDefault();
            $(".product-item:hidden").slice(0, 4).slideDown();
            if ($(".product-item:hidden").length == 0) {
                $("#load").fadeOut('slow');
            }
            $('html,body').animate({
                scrollTop: $(this).offset().top
            }, 1500);
        });
    });
    
    /*=== Smooth Scrolling ===*/
    // Select all links with hashes
    $('.navbar-nav li a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                && 
                location.hostname == this.hostname
            ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });
    
    
    /*=== Superslides ===*/
    $('#slides').superslides()
    
    /*=== Owl Carousel ===*/
    $('#owl-testimony').owlCarousel({
            loop: true,
            margin: 10,
            navText: ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    loop: false,
                    nav: true
                },
                450: {
                    items: 1,
                    loop: false,
                    nav: true
                },
                768: {
                    items: 1,
                    loop: false,
                    nav: true
                },
                991: {
                    items: 1,
                    nav: true,
                    loop: false
                },
                1200: {
                    items: 1,
                    nav: true,
                    loop: false
                }
            }
        });
    
    /*=== Mobile Type ===*/
    $(document).ready(function () {

        var userAgent = navigator.userAgent || navigator.vendor || window.opera;
        if (/windows phone/i.test(userAgent)) {

        }
        if (/android/i.test(userAgent)) {

        }

        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {

        }
    });
    
    /*=== Class Active Navigation Menu ===*/
    $(document).ready(function(){
        $('ul li').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
            $('.navbar-collapse').removeClass('in');
        });
    });
    
    
    /*=== Mosaic Flow JS ===*/
    /**
     * Mosaic Flow
     *
     * Pinterest like responsive image grid that doesn’t sucks
     *
     * @requires jQuery
     * @author Artem Sapegin
     * @copyright 2012 Artem Sapegin, http://sapegin.me
     * @license MIT
     */

    /*jshint browser:true, jquery:true, white:false, smarttabs:true */
    /*global jQuery:false, define:false*/
    (function(factory) {  // Try to register as an anonymous AMD module
        if (typeof define === 'function' && define.amd) {
            define(['jquery'], factory);
        }
        else {
            factory(jQuery);
        }
    }(function($) {
        'use strict';
        var cnt = 0;

        $.fn.mosaicflow = function(options) {
            var args = Array.prototype.slice.call(arguments,0);

            return this.each(function() {
                var elm = $(this);
                var data = elm.data('mosaicflow');

                if (!data) {
                    options = $.extend({}, $.fn.mosaicflow.defaults, options, dataToOptions(elm));
                    data = new Mosaicflow(elm,options);
                    elm.data('mosaicflow', data);
                }
                else if (typeof options === 'string') {
                    data[options](args[1]);
                }
            });
        };

        $.fn.mosaicflow.defaults = {
            itemSelector: '> *',
            columnClass: 'mosaicflow__column',
            minItemWidth: 240,
            itemHeightCalculation: 'auto',
            threshold: 40
        };

        function Mosaicflow(container, options) {
            this.container = container;
            this.options = options;

            this.container.trigger('start');
            this.init();
            this.container.trigger('ready');
        }

        Mosaicflow.prototype = {
            init: function() {
                this.__uid = cnt++;
                this.__uidItemCounter = 0;
                this.items = this.container.find(this.options.itemSelector);
                this.columns = $([]);
                this.columnsHeights = [];
                this.itemsHeights = {};
                this.tempContainer = $('<div>').css({'visibility': 'hidden', 'width': '100%'});
                this.workOnTemp = false;
                this.autoCalculation = this.options.itemHeightCalculation === 'auto';

                this.container.append(this.tempContainer);

                var that = this;
                this.items.each(function() {
                    var elm = $(this);
                    var id = elm.attr('id');
                    if (!id) {
                        // Generate an unique id
                        id = that.generateUniqueId();
                        elm.attr('id', id);
                    }
                });

                this.container.css('visibility', 'hidden');
                if (this.autoCalculation) {
                    $(window).load($.proxy(this.refill, this));
                }
                else {
                    this.refill();
                }
                $(window).resize($.proxy(this.refill, this));
            },

            refill: function() {
                this.container.trigger('fill');
                this.numberOfColumns = Math.floor(this.container.width() / this.options.minItemWidth);
                // Always keep at least one column
                if (this.numberOfColumns < 1)
                                   this.numberOfColumns = 1;

                var needToRefill = this.ensureColumns();
                if (needToRefill) {
                    this.fillColumns();

                    // Remove excess columns
                    this.columns.filter(':hidden').remove();
                }
                this.container.css('visibility', 'visible');
                this.container.trigger('filled');
            },

            ensureColumns: function() {
                var createdCnt = this.columns.length;
                var calculatedCnt = this.numberOfColumns;

                this.workingContainer = createdCnt === 0 ? this.tempContainer : this.container;

                if (calculatedCnt > createdCnt) {
                    var neededCnt = calculatedCnt - createdCnt;
                    for (var columnIdx = 0; columnIdx < neededCnt; columnIdx++) {
                        var column = $('<div>', {
                            'class': this.options.columnClass
                        });

                        this.workingContainer.append(column);
                    }
                }
                else if (calculatedCnt < createdCnt) {
                    var lastColumn = createdCnt;
                    while (calculatedCnt <= lastColumn) {
                        // We can't remove columns here becase it will remove items to. So we hide it and will remove later.
                        this.columns.eq(lastColumn).hide();
                        lastColumn--;
                    }

                    var diff = createdCnt - calculatedCnt;
                    this.columnsHeights.splice(this.columnsHeights.length - diff, diff);
                }

                if (calculatedCnt !== createdCnt) {
                    this.columns = this.workingContainer.find('.' + this.options.columnClass);
                    this.columns.css('width', (100 / calculatedCnt) + '%');
                    return true;
                }

                return false;
            },

            fillColumns: function() {
                var columnsCnt = this.numberOfColumns;
                var itemsCnt = this.items.length;

                for (var columnIdx = 0; columnIdx < columnsCnt; columnIdx++) {
                    var column = this.columns.eq(columnIdx);
                    this.columnsHeights[columnIdx] = 0;
                    for (var itemIdx = columnIdx; itemIdx < itemsCnt; itemIdx += columnsCnt) {
                        var item = this.items.eq(itemIdx);
                        var height = 0;
                        column.append(item);

                        if (this.autoCalculation) {
                            // Check height after being placed in its column
                            height = item.outerHeight();
                        }
                        else {
                            // Read img height attribute
                            height = parseInt(item.find('img').attr('height'), 10);
                        }

                        this.itemsHeights[item.attr('id')] = height;
                        this.columnsHeights[columnIdx] += height;
                    }
                }

                this.levelBottomEdge(this.itemsHeights, this.columnsHeights);

                if (this.workingContainer === this.tempContainer) {
                    this.container.append(this.tempContainer.children());
                }
                this.container.trigger('mosaicflow-layout');
            },

            levelBottomEdge: function(itemsHeights, columnsHeights) {
                while (true) {
                    var lowestColumn = $.inArray(Math.min.apply(null, columnsHeights), columnsHeights);
                    var highestColumn = $.inArray(Math.max.apply(null, columnsHeights), columnsHeights);
                    if (lowestColumn === highestColumn) return;

                    var lastInHighestColumn = this.columns.eq(highestColumn).children().last();
                    var lastInHighestColumnHeight = itemsHeights[lastInHighestColumn.attr('id')];
                    var lowestHeight = columnsHeights[lowestColumn];
                    var highestHeight = columnsHeights[highestColumn];
                    var newLowestHeight = lowestHeight + lastInHighestColumnHeight;

                    if (newLowestHeight >= highestHeight) return;

                    if (highestHeight - newLowestHeight < this.options.threshold) return;

                    this.columns.eq(lowestColumn).append(lastInHighestColumn);
                    columnsHeights[highestColumn] -= lastInHighestColumnHeight;
                    columnsHeights[lowestColumn] += lastInHighestColumnHeight;
                }
            },

            add: function(elm) {
                this.container.trigger('add');
                var lowestColumn = $.inArray(Math.min.apply(null, this.columnsHeights), this.columnsHeights);
                var height = 0;

                if (this.autoCalculation) {

                    // Get height of elm
                    elm.css({
                        position: 'static',
                        visibility: 'hidden',
                        display: 'block'
                    }).appendTo(this.columns.eq(lowestColumn));

                    height = elm.outerHeight();

                    var inlineImages = elm.find('img');
                    if (inlineImages.length !== 0) {

                        inlineImages.each(function() {
                            var image = $(this);
                            var imageSizes = getImageSizes(image);
                            var actualHeight = (image.width()*imageSizes.height)/imageSizes.width;

                            height += actualHeight;
                        });

                    }

                    elm.detach().css({
                        position: 'static',
                        visibility: 'visible'
                    });
                }
                else {
                    height = parseInt(elm.find('img').attr('height'), 10);
                }

                if (!elm.attr('id')) {
                    // Generate a unique id
                    elm.attr('id', this.generateUniqueId());
                }

                // Update item collection.
                // Item needs to be placed at the end of this.items to keep order of elements
                var itemsArr = this.items.toArray();
                itemsArr.push(elm);
                this.items = $(itemsArr);

                this.itemsHeights[elm.attr('id')] = height;
                this.columnsHeights[lowestColumn] += height;
                this.columns.eq(lowestColumn).append(elm);

                this.levelBottomEdge(this.itemsHeights, this.columnsHeights);
                this.container.trigger('mosaicflow-layout');
                this.container.trigger('added');
            },

            remove: function(elm) {
                this.container.trigger('remove');
                var column = elm.parents('.' + this.options.columnClass);

                // Update column height
                this.columnsHeights[column.index() - 1]-= this.itemsHeights[elm.attr('id')];

                elm.detach();

                // Update item collection
                this.items = this.items.not(elm);
                this.levelBottomEdge(this.itemsHeights, this.columnsHeights);
                this.container.trigger('mosaicflow-layout');
                this.container.trigger('removed');
            },

            empty: function() {
                var columnsCnt = this.numberOfColumns;

                this.items = $([]);
                this.itemsHeights = {};

                for (var columnIdx = 0; columnIdx < columnsCnt; columnIdx++) {
                    var column = this.columns.eq(columnIdx);
                    this.columnsHeights[columnIdx] = 0;
                    column.empty();
                }
                this.container.trigger('mosaicflow-layout');
            },

            recomputeHeights: function() {
                function computeHeight(idx, item) {
                    item = $(item);
                    var height = 0;
                    if (that.autoCalculation) {
                        // Check height after being placed in its column
                        height = item.outerHeight();
                    }
                    else {
                        // Read img height attribute
                        height = parseInt(item.find('img').attr('height'), 10);
                    }

                    that.itemsHeights[item.attr('id')] = height;
                    that.columnsHeights[columnIdx] += height;
                }

                var that = this;
                var columnsCnt = this.numberOfColumns;

                for (var columnIdx = 0; columnIdx < columnsCnt; columnIdx++) {
                    var column = this.columns.eq(columnIdx);

                    this.columnsHeights[columnIdx] = 0;
                    column.children().each(computeHeight);
                }
            },

            generateUniqueId: function() {
                // Increment the counter
                this.__uidItemCounter++;

                // Return an unique ID
                return 'mosaic-' + this.__uid + '-itemid-' + this.__uidItemCounter;
            }
        };

        // Camelize data-attributes
        function dataToOptions(elem) {
            function upper(m, l) {
                return l.toUpper();
            }
            var options = {};
            var data = elem.data();
            for (var key in data) {
                options[key.replace(/-(\w)/g, upper)] = data[key];
            }
            return options;
        }

        function getImageSizes(image) {
            var sizes = {};

            sizes.height = parseInt(image.attr('height'), 10);
            sizes.width = parseInt(image.attr('width'), 10);

            if (sizes.height === 0 || sizes.width === 0) {
                var utilImage = new Image();
                utilImage.src = image.attr('src');

                sizes.width = utilImage.width;
                sizes.height = utilImage.height;
            }

            return sizes;
        }

        // Auto init
        $(function() { $('.mosaicflow').mosaicflow(); });

    }));

</script>
