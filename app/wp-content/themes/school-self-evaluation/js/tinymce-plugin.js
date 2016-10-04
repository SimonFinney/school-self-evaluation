(function() {

  function createCommand(textEditor, cmd, title, tagName, className) {
    var text = (cmd[0].toUpperCase() + cmd.substring(1));

    textEditor.addButton(cmd, {
      cmd: cmd,
      text: text,
      title: title,
    });

    textEditor.addCommand(cmd, function() {
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
