/**
 * This configuration was generated using the CKEditor 5 Builder. You can modify it anytime using this link:
 * https://ckeditor.com/ckeditor-5/builder/?utm_source=google&utm_medium=cpc&utm_campaign=LATAM_Search_Branded&gad_source=1&gclid=CjwKCAjwtdi_BhACEiwA97y8BN0I0776ONuJRTZhMyWGmCXmQA_mOecBNnjGVZrkDHTJFuFcthQLmxoCyWYQAvD_BwE#installation/NoNgNARATAdALDADBSBmA7JgHATlQRixChwFYso5904T0QUIAHAFwFoAjAJxUTGHxg+woWHwBdSFg4gAJnACGCiOKA==
 */

import { ClassicEditor, Autosave, Code, CodeBlock, Essentials, Paragraph } from 'ckeditor5';

import translations from 'ckeditor5/translations/pt-br.js';

/**
 * Please update your license key.
 * See: https://ckeditor.com/docs/ckeditor5/latest/getting-started/setup/license-key-and-activation.html
 */
const LICENSE_KEY = '<YOUR_LICENSE_KEY>';

const editorConfig = {
	toolbar: {
		items: ['code', '|', 'codeBlock'],
		shouldNotGroupWhenFull: true
	},
	plugins: [Autosave, Code, CodeBlock, Essentials, Paragraph],
	initialData:
		"<h2>Congratulations on setting up CKEditor 5! 🎉</h2>\n<p>\n\tYou've successfully created a CKEditor 5 project. This powerful text editor\n\twill enhance your application, enabling rich text editing capabilities that\n\tare customizable and easy to use.\n</p>\n<h3>What's next?</h3>\n<ol>\n\t<li>\n\t\t<strong>Integrate into your app</strong>: time to bring the editing into\n\t\tyour application. Take the code you created and add to your application.\n\t</li>\n\t<li>\n\t\t<strong>Explore features:</strong> Experiment with different plugins and\n\t\ttoolbar options to discover what works best for your needs.\n\t</li>\n\t<li>\n\t\t<strong>Customize your editor:</strong> Tailor the editor's\n\t\tconfiguration to match your application's style and requirements. Or\n\t\teven write your plugin!\n\t</li>\n</ol>\n<p>\n\tKeep experimenting, and don't hesitate to push the boundaries of what you\n\tcan achieve with CKEditor 5. Your feedback is invaluable to us as we strive\n\tto improve and evolve. Happy editing!\n</p>\n<h3>Helpful resources</h3>\n<p>\n\t<i>An editor without the </i><code>Link</code>\n\t<i>plugin? That's brave! We hope the links below will be useful anyway </i>😉\n</p>\n<ul>\n\t<li>📝 Trial sign up: https://portal.ckeditor.com/checkout?plan=free,</li>\n\t<li>📕 Documentation: https://ckeditor.com/docs/ckeditor5/latest/installation/index.html,</li>\n\t<li>⭐️ GitHub (star us if you can!): https://github.com/ckeditor/ckeditor5,</li>\n\t<li>🏠 CKEditor Homepage: https://ckeditor.com,</li>\n\t<li>🧑‍💻 CKEditor 5 Demos: https://ckeditor.com/ckeditor-5/demo/</li>\n</ul>\n<h3>Need help?</h3>\n<p>\n\tSee this text, but the editor is not starting up? Check the browser's\n\tconsole for clues and guidance. It may be related to an incorrect license\n\tkey if you use premium features or another feature-related requirement. If\n\tyou cannot make it work, file a GitHub issue, and we will help as soon as\n\tpossible!\n</p>\n",
	language: 'pt-br',
	licenseKey: LICENSE_KEY,
	placeholder: 'Type or paste your content here!',
	translations: [translations]
};

ClassicEditor.create(document.querySelector('#editor'), editorConfig);
