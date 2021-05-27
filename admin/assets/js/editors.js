"use strict";
! function(e, l) {
    e.SummerNote = function() {
        var e = ".summernote-basic";
        l(e).exists() && l(e).each(function() {
            l(this).summernote({
                placeholder: "Hello stand alone ui",
                tabsize: 2,
                height: 120,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "strikethrough", "clear"]],
                    ["font", ["superscript", "subscript"]],
                    ["color", ["color"]],
                    ["fontsize", ["fontsize", "height"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["table", ["table"]],
                    ["insert", ["link", "picture", "video"]],
                    ["view", ["fullscreen", "codeview", "help"]]
                ]
            })
        });
        var t = ".summernote-minimal";
        l(t).exists() && l(t).each(function() {
            l(this).summernote({
                placeholder: "Hello stand alone ui",
                tabsize: 2,
                height: 120,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "underline", "clear"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["table", ["table"]],
                    ["view", ["fullscreen"]]
                ]
            })
        })
    }, e.Tinymce = function() {
        var e = ".tinymce-basic";
        l(e).exists() && tinymce.init({
            selector: e,
            content_css: !0,
            skin: !1,
            branding: !1
        });
        var t = ".tinymce-menubar";
        l(t).exists() && tinymce.init({
            selector: t,
            content_css: !0,
            skin: !1,
            branding: !1,
            toolbar: !1
        });
        var i = ".tinymce-toolbar";
        l(i).exists() && tinymce.init({
            selector: i,
            content_css: !0,
            skin: !1,
            branding: !1,
            menubar: !1
        });
        var n = ".tinymce-inline";
        l(n).exists() && tinymce.init({
            selector: n,
            content_css: !1,
            skin: !1,
            branding: !1,
            menubar: !1,
            inline: !0,
            toolbar: ["undo redo | bold italic underline | fontselect fontsizeselect", "forecolor backcolor | alignleft aligncenter alignright alignfull | numlist bullist outdent indent"]
        })
    }, e.Quill = function() {
        var e = ".quill-basic";
        l(e).exists() && l(e).each(function() {
            new Quill(this, {
                modules: {
                    toolbar: [
                        ["bold", "italic", "underline", "strike"],
                        ["blockquote", "code-block"],
                        [{
                            list: "ordered"
                        }, {
                            list: "bullet"
                        }],
                        [{
                            script: "sub"
                        }, {
                            script: "super"
                        }],
                        [{
                            indent: "-1"
                        }, {
                            indent: "+1"
                        }],
                        [{
                            header: [1, 2, 3, 4, 5, 6]
                        }],
                        [{
                            color: []
                        }, {
                            background: []
                        }],
                        [{
                            font: []
                        }],
                        [{
                            align: []
                        }],
                        ["clean"]
                    ]
                },
                theme: "snow"
            })
        });
        var t = ".quill-minimal";
        l(t).exists() && l(t).each(function() {
            new Quill(this, {
                modules: {
                    toolbar: [
                        ["bold", "italic", "underline"],
                        ["blockquote", {
                            list: "bullet"
                        }],
                        [{
                            header: 1
                        }, {
                            header: 2
                        }, {
                            header: [3, 4, 5, 6, !1]
                        }],
                        [{
                            align: []
                        }],
                        ["clean"]
                    ]
                },
                theme: "snow"
            })
        })
    }, e.EditorInit = function() {
        e.SummerNote(), e.Tinymce(), e.Quill()
    }, e.coms.docReady.push(e.EditorInit)
}(NioApp, jQuery);