(function() {

  function createCommand(textEditor, text, title, tagName, className) {
    var cmd = text.toLowerCase();

    textEditor.addButton(cmd, {
      text: text,
      title: title,
      onclick: function() {
        var selection = textEditor.selection.getContent();

        if (selection && selection.length) {
          textEditor.selection
            .setContent('<' + tagName + ' class="' + className + '">' + selection + '</' + tagName + '>');
        }
      },
    });
  }


  tinymce.create('tinymce.plugins.SchoolSelfEvaluation', {
    init: function(textEditor) {
      createCommand(textEditor, 'Section', 'Add section formatting', 'section', 'section');
      createCommand(textEditor, 'Embed', 'Add embed formatting', 'section', 'section--embed');
    },
  });

  // Register plugin
  tinymce.PluginManager.add('SchoolSelfEvaluation', tinymce.plugins.SchoolSelfEvaluation);
})();
