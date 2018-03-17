const tinymce = window.tinymce;

function createCommand(textEditor, text, title, tagName, className) {
  const cmd = text.toLowerCase();

  textEditor.addButton(cmd, {
    text,
    title,
    onclick() {
      const selection = textEditor.selection.getContent();

      if (selection && selection.length) {
        const content = `<${tagName} class="${className}">${selection}</${tagName}>`;
        textEditor.selection
          .setContent(content);
      }
    },
  });
}


if (tinymce) {
  tinymce.create('tinymce.plugins.SchoolSelfEvaluation', {
    init(textEditor) {
      createCommand(textEditor, 'Section', 'Add section formatting', 'section', 'section');
      createCommand(textEditor, 'Embed', 'Add embed formatting', 'section', 'section--embed');
    },
  });

  // Register plugin
  tinymce.PluginManager.add('SchoolSelfEvaluation', tinymce.plugins.SchoolSelfEvaluation);
}
