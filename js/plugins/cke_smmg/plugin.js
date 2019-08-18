CKEDITOR.plugins.add('cke_smmg', {
  icons: 'seperator,firstname,lastname',

  onLoad: function() {
    CKEDITOR.addCss(
      '.cke_button_label.cke_button__firstname_label{display:inline !important;}' +
      '.cke_button_label.cke_button__lastname_label{display:inline !important;}' +
      '.smmg-separator-icon { width:40px; height:40px;}' +
      '.smmg-placeholder{ ;background:#e4e2ff; border:1px solid silver; padding:3px;margin:3px;border-radius:7px;}' +
      '',
    );

  },
  init: function(editor) {
    //Plugin logic goes here.



    editor.ui.addButton('Seperator', {
      label: 'Insert Seperator',
      command: 'insertSeparatorIcon',
      toolbar: 'insert_placeholders',
    });

    editor.ui.addButton('Firstname', {
      label: 'First Name',
      command: 'insertPlaceholderFirstName',
      toolbar: 'insert_placeholders',
    });

    editor.ui.addButton('Lastname', {
      label: 'Last Name',
      command: 'insertPlaceholderLastName',
      toolbar: 'insert_placeholders',
    });


    editor.addCommand('insertSeparatorIcon', {
      exec: function(editor) {
        editor.insertHtml('<div class="smmg-separator-icon">*</div>');
      },
    });

    editor.addCommand('insertPlaceholderFirstName', {
      exec: function(editor) {
        editor.insertHtml('<span class="smmg-placeholder smmg-placeholder-firstname">@_first_name_@</span>');
      },
    });

    editor.addCommand('insertPlaceholderLastName', {
      exec: function(editor) {
        editor.insertHtml('<span class="smmg-placeholder smmg-placeholder-lastname">@_last_name_@</span>');
      },
    });



  },
});

