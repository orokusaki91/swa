<script src="{{ asset('jq/jquery-3.3.1.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.2.2/web-animations.min.js"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/fontawesome-all.min.js') }}"></script>
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('js/admin.js?ver=' . str_random(10)) }}"></script>
<script>
	$(function () {
    tinymce.init({
        selector: 'textarea',
        language: 'de',
        /* theme of the editor */
        theme: "modern",
        skin: "lightgray",
		branding: false,


        /* width and height of the editor */
        width: "100%",
        height: 300,

        /* display statusbar */
        statubar: true,

        /* plugin */
        plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
        ],

        /* toolbar */
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",

        setup: function(editor) {
            editor.on('change load', function() {
                var iframeBodyMCE = $(tinymce.$(document.body)[0]).find('iframe').contents().find('#tinymce');
                iframeBodyMCE.find('span').css('color', '#000');
                iframeBodyMCE.find('a').css('color', '#000');
                iframeBodyMCE.children().css('color', '#000');
            });
        },

        /* style */
        style_formats: [
        {title: "Headers", items: [
        {title: "Header 1", format: "h1"},
        {title: "Header 2", format: "h2"},
        {title: "Header 3", format: "h3"},
        {title: "Header 4", format: "h4"},
        {title: "Header 5", format: "h5"},
        {title: "Header 6", format: "h6"}
        ]},
        {title: "Inline", items: [
        {title: "Bold", icon: "bold", format: "bold"},
        {title: "Italic", icon: "italic", format: "italic"},
        {title: "Underline", icon: "underline", format: "underline"},
        {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
        {title: "Superscript", icon: "superscript", format: "superscript"},
        {title: "Subscript", icon: "subscript", format: "subscript"},
        {title: "Code", icon: "code", format: "code"}
        ]},
        {title: "Blocks", items: [
        {title: "Paragraph", format: "p"},
        {title: "Blockquote", format: "blockquote"},
        {title: "Div", format: "div"},
        {title: "Pre", format: "pre"}
        ]},
        {title: "Alignment", items: [
        {title: "Left", icon: "alignleft", format: "alignleft"},
        {title: "Center", icon: "aligncenter", format: "aligncenter"},
        {title: "Right", icon: "alignright", format: "alignright"},
        {title: "Justify", icon: "alignjustify", format: "alignjustify"}
        ]}
        ]
    });
})
</script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgZv4d0llq6H3LTupaCXL-Vec5a-q7I28&callback=initMap" async defer></script>-->
