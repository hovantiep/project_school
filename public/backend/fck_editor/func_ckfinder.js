function ckeditor(name, config) {
    var config_1 = {
        uiColor: '#9AB8F3',
        language: 'vi',
        filebrowserImageBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        toolbar: [
            ['Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates'],
            ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print'],
            ['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
            ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'HiddenField'],
            ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
            ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
            ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            ['Link', 'Unlink', 'Anchor'],
            ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],
            ['Styles', 'Format', 'Font', 'FontSize'],
            ['TextColor', 'BGColor'],
            ['Maximize', 'ShowBlocks', '-', 'About']
        ]
    };
    var config_2 = {
        uiColor: '#9AB8F3',
        language: 'vi',
        filebrowserImageBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        toolbar: [
            ['Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates'],
            ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print'],
            //['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
            //['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'HiddenField'],
            ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
            //['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
            //['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            //['Link', 'Unlink', 'Anchor'],
            ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],
            ['Styles', 'Format', 'Font', 'FontSize'],
            ['TextColor', 'BGColor'],
            //['Maximize', 'ShowBlocks', '-', 'About']
        ]
    };
    var config_3 = {
        language: 'vi',
        filebrowserImageBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        toolbar: [
            ['Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates'],
            //['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print'],
            //['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
            //['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'HiddenField'],
            ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
            //['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
            //['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            //['Link', 'Unlink', 'Anchor'],
            ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],
            ['Styles', 'Format', 'Font', 'FontSize'],
            ['TextColor', 'BGColor'],
            //['Maximize', 'ShowBlocks', '-', 'About']
        ],
        removeButtons: '-,Save,NewPage,Strike,Subscript,Superscript,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak'
    };
    var config_4 = {
        language: 'vi',
        filebrowserImageBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: baseURL + '/backend/fck_editor/ckfinder/ckfinder.html?Type=Flash',
        filebrowserImageUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: baseURL + '/backend/fck_editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
        toolbar: [
            //['Source', '-', 'Save', 'NewPage', 'Preview', '-', 'Templates'],
            //['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print'],
            //['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
            //['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'HiddenField'],
            ['Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'],
            //['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
            //['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            //['Link', 'Unlink', 'Anchor'],
            ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'],
            ['Styles', 'Format', 'Font', 'FontSize'],
            ['TextColor', 'BGColor'],
            //['Maximize', 'ShowBlocks', '-', 'About']
        ],
        removeButtons: '-,Save,NewPage,Strike,Subscript,Superscript,Flash,HorizontalRule,Smiley,SpecialChar,PageBreak,Table,Styles,Format'
    };
    var editor;
    if (config == 'config_1') {
        editor = CKEDITOR.replace(name, config_1);
    } else if (config == 'config_2') {
        editor = CKEDITOR.replace(name, config_2);
    } else if (config == 'config_3') {
        editor = CKEDITOR.replace(name, config_3);
    } else if (config == 'config_4') {
        editor = CKEDITOR.replace(name, config_4);
    } else {
        editor = CKEDITOR.replace(name);
    }
}