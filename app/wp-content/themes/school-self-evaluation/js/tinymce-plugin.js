(function() {
  tinymce.create('tinymce.plugins.SchoolSelfEvaluation', {
    init: function(textEditor) {

      textEditor.addButton('section', {
        cmd: 'section',
        title: 'Add section formatting',
      });

      textEditor.addCommand('section', function() {
        textEditor.selection
          .setContent(
            '<section class="section">' + textEditor.selection.getContent() + '</section>'
        );
      });
    },
  });

  // Register plugin
  tinymce.PluginManager.add('SchoolSelfEvaluation', tinymce.plugins.SchoolSelfEvaluation);
})();
