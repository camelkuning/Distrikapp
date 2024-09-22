tinymce.init({
    selector: '#editor',
    plugins: 'advcode, advlist, advtable, anchor, autosave, autolink, charmap, checklist, directionality, editimage, emoticons, export, formatpainter, image, insertdatetime, link, linkchecker, lists, media, mediaembed, nonbreaking, pagebreak, permanentpen, powerpaste, searchreplace, table, tableofcontents, tinymcespellchecker, visualblocks, visualchars, wordcount',
    toolbar: 'undo redo print | blocks fontfamily fontsize | bold italic underline | link image | alignleft aligncenter alignright alignjustify lineheight | checklist bullist numlist indent outdent | code',
    editable_root: false,
    editable_class: 'editable',
    powerpaste_word_import: 'prompt',
    powerpaste_html_import: 'prompt',
});
