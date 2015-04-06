var $hilighted, $hilightedMenuItem, optionDictionary = {},
names = [];
function toDot(id) {
    return id.replace(/[-]+/g, '.')
};
String.prototype.replaceAll = function(s1, s2) {
    return this.replace(new RegExp(s1, "gm"), s2)
};
function activateInternalLinks($parent) {
    $('a[href^="#"]', $parent).each(function(i, anchor) {
        $(anchor).click(function() {
            gotoSection(anchor.href.split('#')[1], true);
            return false
        })
    })
};
function hilight(id) {
    var linkId, $el, $detailsWrap = $('#details-wrap');
    id = id.replace('<', '\\<').replace('>', '\\>');
    $el = $('div.member#' + id);
    if ($hilighted) {
        $hilighted.removeClass('hilighted')
    }
    if ($hilightedMenuItem) {
        $hilightedMenuItem.removeClass('hilighted')
    }
    if ($el.length === 0) {
        $detailsWrap.scrollTop(0)
    } else {
        $hilighted = $el;
        $hilighted.addClass('hilighted');
        $detailsWrap.scrollTop($hilighted.offset().top + $detailsWrap.scrollTop() - 160)
    }
    linkId = id.replace(/[^a-z0-9<>\\]+/gi, '.');
    $hilightedMenuItem = $('a[href="#' + linkId + '"]').not('.plus');
    $hilightedMenuItem.addClass('hilighted')
};
function toggleExpand($elem, callback) {
    var $_menu = $elem.find('div[id$="-menu"]').first(),
    _id = $_menu.attr('id').replace("-menu", ""),
    displayChildrenCallback = function() {
        $('.dots', $elem).removeClass('loading');
        $elem.removeClass("collapsed");
        $elem.addClass("expanded");
        $_menu.slideDown();
        if (/[A-Z]/.test(_id[0])) {
            _id = 'object-' + _id
        }
        toggleSection(_id);
        if (callback) {
            callback()
        }
    };
    if ($elem.hasClass('collapsed')) {
        if ($_menu.children().size() == 1) {
            $('.dots', $elem).addClass('loading');
            loadChildren(_id, false, displayChildrenCallback)
        } else {
            displayChildrenCallback()
        }
    } else {
        $_menu.slideUp('normal',
        function() {
            $elem.removeClass("expanded");
            $elem.addClass("collapsed")
        })
    }
};
function toggleSection(sectionId) {
    $section = $("#details > div.section:visible");
    if ($section) {
        $section.hide()
    }
    if (/[^\\]</.test(sectionId)) {
        sectionId = sectionId.replace('<', '\\<').replace('>', '\\>')
    }
    $('#details > div.section#' + sectionId).show()
};
function addSectionOption(val) {
    var name_id = val.fullname.replace('<', '&lt;').replace('>', '&gt;');
    $section = $('<div class="section" id="' + val.name + '" style="display:none;"></div>').appendTo('#details');
    var tempStr = "";
    if(val.chinese!=null) {
        tempStr+='<div class="section-description '+val.name+'_english langHide">' + val.description + '</div><div class="section-description '+val.name+'_chinese">' + val.chinese + '</div>';
    } else {
        tempStr+='<div class="section-description '+val.name+'_english">' + val.description + '</div><div class="section-description '+val.name+'_chinese langHide">暂无翻译</div>';
    }
    //(val.description ? '<div class="section-description '+val.name+'_english">' + val.description + '</div>': '') + (val.chinese ? '<div class="section-description '+val.name+'_chinese  chinese">' + val.chinese + '</div>': '')
    $('<h1>' + name_id + '<span onclick="changeLang(\''+val.name+'\');" style="cursor:pointer">中/英</span><span> | </span><span><a href="translate.php?h=' + temp2 + '&target=' + name_id + '" target="_blank">有更好的翻译？</a></span></h1>' + tempStr +  (val.demo ? '<div class="demo">在线试一试： ' + val.demo + '</div>': '')).appendTo($section);
    activateInternalLinks($section);
    $(document).triggerHandler({
        type: "xtra.btn.section.event",
        id: optionDictionary[val.fullname],
        table: 'option'
    })
};
// Method Top
function addSectionObject(val) {
    $section = $('<div class="section" id="object-' + val.name + '" style="display:none;"></div>').appendTo('#details');
    $('<h2>' + val.title + ' (' + val.name + ') <span onclick="changeLang(\'object-'+val.name+'\');" style="cursor:pointer">中/英</span><span>  | </span><span><a href="translate.php?h=' + temp2 + '&target=' + val.name + '" target="_blank">有更好的翻译？</a></span></h2>').appendTo($section);
    if(val.chinese!=null) {
    	$('<div class="section-description object-'+val.name+'_english langHide">' + val.description + '</div>' + '<div class="section-description object-'+val.name+'_chinese">' + val.chinese + '</div>').appendTo($section);
    } else {
        $('<div class="section-description object-'+val.name+'_english">' + val.description + '</div>' + '<div class="section-description object-'+val.name+'_chinese langHide">暂无翻译</div>').appendTo($section);
    }
    
    activateInternalLinks($section);
    $(document).triggerHandler({
        type: "xtra.btn.section.event",
        id: 'object-' + val.name,
        table: 'object'
    })
};
function loadOptionMemberInSection(obj, isParent) {
    $(".primary").hide();
    var $_section = $('div#' + obj.parent.replace('<', '\\<').replace('>', '\\>') + '.section'),
    $_inheritedLink,
    $memberDiv;
    var tempStr = null;
    if(obj.chinese) {
        tempStr = '<div class="'+obj.name+'_english langHide">' + obj.description + '</div><p class="'+obj.name+'_chinese">' + obj.chinese+ '</p>';
    } else {
        tempStr = '<p class="'+obj.name+'_english">' + obj.description + '</p><p class="'+obj.name+'_chinese langHide">暂无翻译</p>';
    }
    $memberDiv = $('<div class="member" id="' + obj.name + '"><span class="title">' + obj.title + '</span>' + (obj.returnType ? '<span class="returnType">: ' + obj.returnType.replace(/[<>]/g,
    function(a) {
        return {
            '<': '&lt;',
            '>': '&gt;'
        } [a]
    }) + '</span>': '') + (obj.deprecated ? '<div class="deprecated"><p>已废弃！</p></div>': '') + ('<div class="edit"><span onclick="changeLang(\''+obj.name+'\');" style="cursor:pointer">中/英</span> | <span><a href="translate.php?h=' + temp2 + '&target=' + obj.name.replace("--", ".") + '" target="_blank">有更好的翻译？</a></div>') + (obj.since ? '<div class="since">Since ' + obj.since + '</div>': '') + ('<div class="description">'+tempStr +  (obj.defaults ? ' 默认是： <code>' + obj.defaults + '</code>.': '') + '</div>') + (obj.demo ? '<div class="demo">在线试一试: ' + obj.demo + '</div>': '') + (obj.seeAlso ? '<div class="seeAlso">类似的属性还有： ' + obj.seeAlso + '</div>': '') + '</div>').appendTo($_section);
    activateInternalLinks($memberDiv);
    if (isParent) {
        $('div#' + obj.name + '.member span.title').html(function() {
            var title = $.trim($(this).text());
            return $('<a href="#' + obj.fullname + '">' + title + '</a>').click(function() {
                gotoSection(obj.fullname, true)
            })
        })
    }
};
function loadObjectMemberInSection(obj) {
	
    $(".primary").hide();
    var val_name = obj.name;
    var tempStr = null;
    if(obj.chinese) {
        tempStr = '<p class="'+obj.name+'_english langHide">' + obj.description + '</p><p class="'+obj.name+'_chinese">' + obj.chinese+ '</p>';
    } else {
        tempStr = '<p class="'+obj.name+'_english">' + obj.description + '</p><p class="'+obj.name+'_chinese langHide">暂无翻译</p>';
    }
    $memberDiv = $('<div class="member" id="' + obj.name + '"><span class="title">' + obj.title + '</span> ' + (obj.params ? '<span class="parameters">' + obj.params + '</span>': '') + ('<div class="edit"><span onclick="changeLang(\''+obj.name+'\');" style="cursor:pointer">中/英</span> | <span><a href="translate.php?h=' + temp2 + '&target=' + val_name.replace("--", ".") + '" target="_blank">有更好的翻译？</a></div>') + (obj.since ? '<div class="since">Since ' + obj.since + '</div>': '') + (obj.deprecated ? '<div class="deprecated"><p>已废弃！</p></div>': '') + '<div class="description">'+tempStr+(obj.paramsDescription ? '<h4>参数列表：</h4><ul id="paramdesc"><li>' + obj.paramsDescription.replace(/\|\|/g, '</li><li>') + '</li></ul>': '') + (obj.returnType ? '<h4>返回值</h4><ul id="returns"><li>' + obj.returnType.replace(/\|\|/g, '</li><li>') + '</li></ul>': '') + '</div>' + (obj.demo ? '<div class="demo">在线试一试： ' + obj.demo + '</div>': '') + '</div>').appendTo('div#object-' + obj.parent + '.section');
    activateInternalLinks($memberDiv)
};
function loadChildren(name, silent, callback) {
    $(".primary").hide();
    var isObject = /[A-Z]/.test(name[0]),
    url = isObject ? PRODUCTNAME + '/' + temp + 'object/child/' + name + ".json": PRODUCTNAME + '/' + temp + 'option/child/' + name + ".json";
    $.ajax({
        type: "GET",
        url: url,
        dataType: "json",
        success: function(data) {
            var display = 'block',
            display, $menu, $menuItem;
            if (silent) {
                display = 'none'
            }
            name = name.replace('<', '\\<').replace('>', '\\>');
            $menu = $('div#' + name + '-menu');
            $.each(data,
            function(key, val) {
                var $div = $('<div></div>').appendTo($menu),
                $plus,
                $menuLink,
                parts,
                tie,
                dottedName,
                internalName,
                name,
                title,
                defaults;
                name = val.fullname;
                if (val.isParent) {
                    var preBracket = '{',
                    postBracket = '}';
                    if (val.returnType && val.returnType.indexOf('Array') === 0) {
                        preBracket = '[{';
                        postBracket = '}]'
                    }
                    $menuItem = $('<div class="menuitem collapsed"></div>');
                    $menuLink = $('<a href="#' + name + '">' + val.title + '</a>').appendTo($menuItem);
                    $menuLink.click(function() {
                        gotoSection(val.fullname, true)
                    });
                    $plus = $('<a href="#' + name + '" class="plus"></a>').appendTo($menuItem);
                    $plus.click(function() {
                        toggleExpand($plus.parent())
                    });
                    $menuItem.append(':&nbsp;' + preBracket + '<span class="dots"><span>...</span></span>');
                    $subMenu = $('<div id="' + val.name + '-menu" style="display:none"><div>').appendTo($menuItem);
                    $menuItem.append(postBracket);
                    $menuItem.appendTo($menu);
                    addSectionOption(val)
                } else {
                    if (val.type === 'method') {
                        title = val.title + '()'
                    } else {
                        title = val.title
                    }
                    $menuLink = $('<a href="#' + name + '">' + title + '</a>').appendTo($div);
                    $menuLink.click(function() {
                        gotoSection(name, true)
                    });
                    if (val.type === 'method') {
                        defaults = '[function]'
                    } else if (val.type === 'property') {
                        defaults = '[' + val.returnType + ']'
                    } else {
                        defaults = val.defaults
                    }
                    $('<span class="value">: ' + defaults + '</span>').appendTo($div)
                }
                if (isObject) {
                    loadObjectMemberInSection(val)
                } else {
                    loadOptionMemberInSection(val, val.isParent)
                }
            });
            $(document).triggerHandler({
                type: "xtra.btn.member.event",
                id: isObject ? 'object-' + name: name,
                table: isObject ? 'object': 'option'
            });
            if (callback) {
                callback()
            }
        }
    })
};

// 语言切换
function changeLang(target) {
	$("#"+target).find("."+target+"_chinese").toggle();
	$("#"+target).find("."+target+"_english").toggle();
}

function loadObjectMembers(name) {
    $.ajax({
        type: "GET",
        url: 'object/' + PRODUCTNAME + 'object/child/' + name,
        async: false,
        dataType: "json",
        success: function(data) {
            $.each(data,
            function(key, val) {
                loadObjectMemberInSection(val)
            })
        }
    });
    $(document).triggerHandler({
        type: "xtra.btn.member.event",
        id: 'object-' + name,
        table: 'object'
    })
};
function gotoSection(anchor, hilighted) {
    var name, levels, member, isObjectArr, isObject, parts, $_parent, $_parentparent, $_menu, sectionId, parent, callbackStack = [];
    parts = anchor.split("-");
    name = optionDictionary[anchor];
    if (!name) {
        $_parent = $('#' + anchor + '-menu').parent();
        if ($_parent.length > 0) {
            toggleExpand($_parent)
        }
        return
    }
    isObject = (parts.length > 1 && parts[0] == 'object' || /[A-Z]/.test(name[0]));
    member = name.split(/[-:]{2}/);
    levels = member[0].split("-");
    $.each(levels,
    function(i) {
        callbackStack.push(function() {
            var proceed = true,
            level, $_menu, $_parent;
            if (levels[i]) {
                level = levels.slice(0, i + 1).join('-');
                if (level.indexOf('<') > -1) {
                    $_parentparent = $('#' + level.split('<')[0] + '-menu').parent();
                    level = level.replace('<', '\\<').replace('>', '\\>')
                }
                $_menu = $('#' + level + '-menu');
                $_parent = $_menu.parent();
                if ($_menu && $_parent.hasClass('collapsed')) {
                    if ($_parentparent && $_parentparent.hasClass('collapsed')) {
                        toggleExpand($_parentparent)
                    }
                    toggleExpand($_parent, callbackStack[i + 1]);
                    proceed = false
                }
            }
            if (1 + i == levels.length) {
                if (/[A-Z]/.test(level[0])) {
                    level = 'object-' + level
                }
                toggleSection(level);
                $("#search").val("");
                window.location.hash = anchor
            }
            if (proceed && callbackStack[i + 1]) {
                callbackStack[i + 1]()
            }
        })
    });
    if (hilighted) {
        callbackStack.push(function() {
            hilight(name)
        })
    }
    callbackStack[0]()
};
function addFirstLevelMenuItem(key, val, type) {
    var $menuItem = $('<div class="menuitem collapsed"></div>').appendTo('#' + type + 's'),
    $plus,
    anchor,
    $menu,
    levels,
    level,
    member,
    $menuLink,
    sectionId = val.fullname || val.name,
    title = val.title.replace('<', '&lt;').replace('>', '&gt;'),
    mainSection,
    name = val.name,
    recurseToType = false,
    menuItemPrefix = '';
    prefix = ': {',
    suffix = '}';
    if (val.returnType && val.returnType.indexOf('Array') == 0) {
        prefix = ': [{';
        suffix = '}]'
    }
    if ($.inArray(val.name, ['global', 'lang']) !== -1) {
        $menuItem = $('<div class="menuitem collapsed"></div>').appendTo('#global-options')
    }
    if (sectionId.indexOf('<') > -1) {
        mainSection = sectionId.split('<')[0];
        if ($('#' + mainSection + '-menu').length === 0) {
            sectionId = title = name = mainSection;
            prefix = ': [';
            suffix = ']';
            recurseToType = true
        } else {
            $menuItem.appendTo($('#' + mainSection + '-menu'));
            menuItemPrefix = '{';
            title = 'type: "' + sectionId.split('<')[1].split('>')[0] + '"';
            prefix = ', '
        }
    }
    if (menuItemPrefix) {
        $menuItem.append(menuItemPrefix)
    }
    $menuLink = $('<a href="#' + sectionId + '">' + title + '</a>').appendTo($menuItem).click(function() {
        gotoSection(sectionId, true);
        return false
    });
    $plus = $('<a href="#' + sectionId + '" class="plus"></a>').appendTo($menuItem).click(function() {
        toggleExpand($plus.parent())
    });
    $menuItem.append(prefix);
    $('<span class="dots"><span>...</span></span>').appendTo($menuItem);
    $subMenu = $('<div id="' + name + '-menu" style="display:none"><div>').appendTo($menuItem);
    $menuItem.append(suffix);
    if (type === 'option') {
        addSectionOption(val)
    } else {
        addSectionObject(val)
    }
    if (recurseToType) {
        addFirstLevelMenuItem.apply(null, arguments)
    }
};
$(document).ready(function() {
    if (/-/.test(location.hash)) {
        location.hash = location.hash.replace(/(--|-)/g, '.')
    }
    $.ajax({
        type: "GET",
        url: PRODUCTNAME + '/' + temp + 'names.json',
        async: false,
        dataType: "json",
        success: function(data) {
            $.each(data, function (key, val) {
                var dotted = toDot(val);
                names.push(dotted);
                optionDictionary[dotted] = val;
            });

            $("#search" ).autocomplete({
                source: names,
                minLength: 2,
                select: function( event, ui ) {
                        gotoSection(ui.item.value, true);
                }
            });
        }
    });
    $.ajax({
        type: "GET",
        url: PRODUCTNAME + '/' + temp + 'main.json',
        async: false,
        dataType: "json",
        success: function(data) {
            $.each(data,
            function(key, val) {
                addFirstLevelMenuItem(key, val, 'option')
            })
        }
    });
    $.ajax({
        type: "GET",
        url: PRODUCTNAME + '/' + temp + 'obj_main.json',
        async: false,
        dataType: "json",
        success: function(data) {
            $.each(data,
            function(key, val) {
                addFirstLevelMenuItem(key, val, 'object')
            })
        }
    });
    anchor = window.location.hash.replace('#', '').replace('()', '');
    if (anchor) {
        gotoSection(anchor, true)
    }
    if (/\?object_not_found=true/.test(window.location.search)) {
        dottedName = window.location.hash.split('#').pop();
        internalName = optionDictionary[dottedName];
        $('div#' + internalName).append('<div class="error">The object/option wasn\'t found in the database, maybe it\'s</div>')
    }
    $("#search")[0].focus()
});