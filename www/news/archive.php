<?php
$page = "news-archive";
$title = "LanguageTool";
$title2 = "News Archive";
$lastmod = "2012-08-19 15:37:00 CET";
include("../../include/header.php");
?>

<p class="firstpara">See <a href="/news">the news page</a> for the latest news.</p>

<p><strong>2012-03-25:</strong> Released LanguageTool 1.7. Changes include:</p>
<ul>
    <li><?=show_link("Rule updates", "../changes/V_1_6_to_V_1_7/", 0) ?> for several languages (French, English, Breton, Russian, Esperanto, German)</li>
    <li>Several small bug fixes</li>
    <li>For a detailed list of changes, see the <?=show_link("Changelog", "../download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2012-02-04:</strong> See our new language-specific pages for <?=show_link("German", "../de/", 0) ?>, <?=show_link("Russian", "../ru/", 0) ?>, and <?=show_link("Esperanto", "../eo/", 0) ?></p>

<p><strong>2011-12-31:</strong> Released LanguageTool 1.6. Changes include:</p>
<ul>
    <li><?=show_link("Rule updates", "../changes/V_1_5_to_V_1_6/", 0) ?> for several languages (Chinese, French, Breton, and others)</li>
    <li>Renamed the Java packages from de.danielnaber.languagetool.* to org.languagetool.*</li>
    <li>For a more detailed list of changes, see the <?=show_link("Changelog", "../download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2011-11-18:</strong> We now offer <?=show_link("Wikicheck, a new service to check Wikipedia pages with LanguageTool", "http://community.languagetool.org/wikiCheck/index", 0)?></p>

<p><strong>2011-09-25:</strong> Released LanguageTool 1.5. Changes include:
<ul>
    <li>Support for new languages: Chinese, Asturian, Breton, and Tagalog</li>
    <li>Automatic language detection (not relevant for OpenOffice.org/LibreOffice)</li>
    <li>Many rule updates for several languages</li>
    <li>For a more detailed list of changes, see the <?=show_link("Changelog", "/download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2011-08-28:</strong> Our <?=show_link("Google Summer of Code students", "/gsoc2011", 0)?> have
successfully finished their projects and the results will be part of LanguageTool 1.5, to be released in about one month.</p>

<p><strong>2011-06-26:</strong> Released LanguageTool 1.4. Changes include:
<ul>
	<li>Rule updates for English, French, German, Russian, and Esperanto.</li>
    <li>Support for Khmer</li>
    <li>Some internal cleanups and simplifications</li>
	<li>For a more detailed list of changes, see the <?=show_link("Changelog", "/download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2011-03-28:</strong> Released LanguageTool 1.3.1. This fixes a NullPointerException occurring with some inputs.</p>
<p><strong>2011-03-27:</strong> Released LanguageTool 1.3. Changes include:
<ul>
	<li>Rule updates for Spanish, French, Polish, Dutch, Russian, English, and Esperanto.</li>
    <li>Reduced false alarms for Spanish in a significant way.</li>
	<li>Some bug fixes.</li>
	<li>For a more detailed list of changes, see the <?=show_link("Changelog", "/download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2011-01-02:</strong> Released LanguageTool 1.2. Changes include:
<ul>
	<li>Rule updates for Romanian, Dutch, Polish, German, Russian, Spanish, French and Danish.</li>
	<li>Added new scripts testwikipedia.sh and testwikipedia.bat to the distribution. These
		let you check a local Wikipedia XML dump.</li>
	<li>Added support for Esperanto.</li>
	<li>Small bug fixes.</li>
	<li>For a more detailed list of changes, see the <?=show_link("Changelog", "/download/CHANGES.txt", 0) ?></li>
</ul>

<p><strong>2010-09-26:</strong> Released version 1.1. For a list of changes, see the <?=show_link("Changelog", "/download/CHANGES.txt", 0) ?></p>

<p><strong>2010-08-29:</strong>

There's a new <?=show_link("script to use LanguageTool from within vim", "http://www.vim.org/scripts/script.php?script_id=3223", 0)?>.</p>

<p><strong>2010-02-20:</strong>

LanguageTool has been integrated into <?=show_link("After the Deadline", "http://open.afterthedeadline.com/", 0)?>,
a powerful English grammar checker. Thanks to LanguageTool it now also  supports French and German.
This means that you can now use LanguageTool for these languages via the
<?=show_link("After the Deadline Firefox plugin", "http://firefox.afterthedeadline.com/", 0)?>.</p>

<p><strong>2009-11-01:</strong> Released version 1.0.0. Changes include:
<ul>
	<li>Support for Danish, Catalan, and Galician</li>
	<li>Rule and dictionary fixes for Dutch, French, Italian, Polish, Spanish, Swedish, and Russian</li>
	<li>More rules for Dutch, Polish, Russian, Spanish, Slovenian, and English</li>
	<li>Several bug fixes</li>
	<li>For a more detailed list of changes, see the <?=show_link("Changelog", "/download/CHANGES.txt", 0) ?>.</li>
</ul>

<p><strong>2009-05-22:</strong> Released version 0.9.9. Changes include:
<ul>
	<li>Fixed a NullPointerException that could appear when using
  paragraph-level rules (<a href="https://sourceforge.net/tracker/?func=detail&aid=2787814&group_id=110216&atid=655717">#2787814</a>)</li>
	<li>Initial support for Icelandic</li>
	<li>More English, Dutch, Polish and Romanian grammar rules</li>
	<li>Fixed some bugs with pairing brackets</li>
	<li>Added sentence tokenizer that uses SRX format for
  specifying end-of-sentence breaks</li>
</ul>

<p><strong>2009-04-26:</strong> Released version 0.9.8. Changes include:
<ul>
	<li>Fixed a crash (<a href="http://sourceforge.net/tracker/?func=detail&amp;aid=2613574&amp;group_id=110216&amp;atid=655717">#2613574</a>)</li>
	<li>New rules for Italian</li>
	<li>Many new rules, a rule-based disambiguator and synthesiser for Romanian</li>
	<li>Initial support for Slovak</li>
	<li>Small fixes and additions for Polish and English</li>
</ul>

<?php
include("../../include/footer.php");
?>
