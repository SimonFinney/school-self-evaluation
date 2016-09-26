(function() {

  function createCommand(textEditor, command, title, tagName, className) {
    textEditor.addButton(command, {
      cmd: command,
      title: title,
    });

    textEditor.addCommand(command, function() {
      textEditor.selection
        .setContent('<' + tagName + ' class="' + className + '">' + textEditor.selection.getContent() + '</' + tagName + '>');
    });
  }


  tinymce.create('tinymce.plugins.SchoolSelfEvaluation', {
    init: function(textEditor) {
      createCommand(textEditor, 'section', 'Add section formatting', 'section', 'section');
      createCommand(textEditor, 'embed', 'Add embed formatting', 'section', 'section--embed');
    },
  });

  // Register plugin
  tinymce.PluginManager.add('SchoolSelfEvaluation', tinymce.plugins.SchoolSelfEvaluation);
})();
