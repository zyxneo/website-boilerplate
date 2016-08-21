<?php require_once('includes/top.php'); ?>

<div class="container">

	<h1>Webfont</h1>
	
	<p>Don't forget to add yout font definitions to the styleguide css!</p>
	
	<h3>Characters</h3>
	
	<ol id="sg-codechart"></ol>
	<script type="text/javascript">
	/*
	http://unicode.org/charts/
	
	http://unicode.org/Public/UNIDATA/Blocks.txt
	To convert txt to json:
	find: ([A-Fa-f0-9]{4,5})..([A-Fa-f0-9]{4,5}); ([a-zA-Z1 -]*)
	replace: "$3" : { "min": "$1", "max": "$2"},
	*/
	var codechart = {
		"Basic Latin": {
			"min": "0000",
			"max": "007F"
		},
		"Latin-1 Supplement": {
			"min": "0080",
			"max": "00FF"
		},
		"Latin Extended-A": {
			"min": "0100",
			"max": "017F"
		},
		"Latin Extended-B": {
			"min": "0180",
			"max": "024F"
		},
		"IPA Extensions": {
			"min": "0250",
			"max": "02AF"
		},
		"Spacing Modifier Letters": {
			"min": "02B0",
			"max": "02FF"
		},
		"Combining Diacritical Marks": {
			"min": "0300",
			"max": "036F"
		},
		"Greek and Coptic": {
			"min": "0370",
			"max": "03FF"
		},
		"Cyrillic": {
			"min": "0400",
			"max": "04FF"
		},
		"Cyrillic Supplement": {
			"min": "0500",
			"max": "052F"
		},
		"Armenian": {
			"min": "0530",
			"max": "058F"
		},
		"Hebrew": {
			"min": "0590",
			"max": "05FF"
		},
		"Arabic": {
			"min": "0600",
			"max": "06FF"
		},
		"Syriac": {
			"min": "0700",
			"max": "074F"
		},
		"Arabic Supplement": {
			"min": "0750",
			"max": "077F"
		},
		"Thaana": {
			"min": "0780",
			"max": "07BF"
		},
		"NKo": {
			"min": "07C0",
			"max": "07FF"
		},
		"Samaritan": {
			"min": "0800",
			"max": "083F"
		},
		"Mandaic": {
			"min": "0840",
			"max": "085F"
		},
		"Arabic Extended-A": {
			"min": "08A0",
			"max": "08FF"
		},
		"Devanagari": {
			"min": "0900",
			"max": "097F"
		},
		"Bengali": {
			"min": "0980",
			"max": "09FF"
		},
		"Gurmukhi": {
			"min": "0A00",
			"max": "0A7F"
		},
		"Gujarati": {
			"min": "0A80",
			"max": "0AFF"
		},
		"Oriya": {
			"min": "0B00",
			"max": "0B7F"
		},
		"Tamil": {
			"min": "0B80",
			"max": "0BFF"
		},
		"Telugu": {
			"min": "0C00",
			"max": "0C7F"
		},
		"Kannada": {
			"min": "0C80",
			"max": "0CFF"
		},
		"Malayalam": {
			"min": "0D00",
			"max": "0D7F"
		},
		"Sinhala": {
			"min": "0D80",
			"max": "0DFF"
		},
		"Thai": {
			"min": "0E00",
			"max": "0E7F"
		},
		"Lao": {
			"min": "0E80",
			"max": "0EFF"
		},
		"Tibetan": {
			"min": "0F00",
			"max": "0FFF"
		},
		"Myanmar": {
			"min": "1000",
			"max": "109F"
		},
		"Georgian": {
			"min": "10A0",
			"max": "10FF"
		},
		"Hangul Jamo": {
			"min": "1100",
			"max": "11FF"
		},
		"Ethiopic": {
			"min": "1200",
			"max": "137F"
		},
		"Ethiopic Supplement": {
			"min": "1380",
			"max": "139F"
		},
		"Cherokee": {
			"min": "13A0",
			"max": "13FF"
		},
		"Unified Canadian Aboriginal Syllabics": {
			"min": "1400",
			"max": "167F"
		},
		"Ogham": {
			"min": "1680",
			"max": "169F"
		},
		"Runic": {
			"min": "16A0",
			"max": "16FF"
		},
		"Tagalog": {
			"min": "1700",
			"max": "171F"
		},
		"Hanunoo": {
			"min": "1720",
			"max": "173F"
		},
		"Buhid": {
			"min": "1740",
			"max": "175F"
		},
		"Tagbanwa": {
			"min": "1760",
			"max": "177F"
		},
		"Khmer": {
			"min": "1780",
			"max": "17FF"
		},
		"Mongolian": {
			"min": "1800",
			"max": "18AF"
		},
		"Unified Canadian Aboriginal Syllabics Extended": {
			"min": "18B0",
			"max": "18FF"
		},
		"Limbu": {
			"min": "1900",
			"max": "194F"
		},
		"Tai Le": {
			"min": "1950",
			"max": "197F"
		},
		"New Tai Lue": {
			"min": "1980",
			"max": "19DF"
		},
		"Khmer Symbols": {
			"min": "19E0",
			"max": "19FF"
		},
		"Buginese": {
			"min": "1A00",
			"max": "1A1F"
		},
		"Tai Tham": {
			"min": "1A20",
			"max": "1AAF"
		},
		"Combining Diacritical Marks Extended": {
			"min": "1AB0",
			"max": "1AFF"
		},
		"Balinese": {
			"min": "1B00",
			"max": "1B7F"
		},
		"Sundanese": {
			"min": "1B80",
			"max": "1BBF"
		},
		"Batak": {
			"min": "1BC0",
			"max": "1BFF"
		},
		"Lepcha": {
			"min": "1C00",
			"max": "1C4F"
		},
		"Ol Chiki": {
			"min": "1C50",
			"max": "1C7F"
		},
		"Sundanese Supplement": {
			"min": "1CC0",
			"max": "1CCF"
		},
		"Vedic Extensions": {
			"min": "1CD0",
			"max": "1CFF"
		},
		"Phonetic Extensions": {
			"min": "1D00",
			"max": "1D7F"
		},
		"Phonetic Extensions Supplement": {
			"min": "1D80",
			"max": "1DBF"
		},
		"Combining Diacritical Marks Supplement": {
			"min": "1DC0",
			"max": "1DFF"
		},
		"Latin Extended Additional": {
			"min": "1E00",
			"max": "1EFF"
		},
		"Greek Extended": {
			"min": "1F00",
			"max": "1FFF"
		},
		"General Punctuation": {
			"min": "2000",
			"max": "206F"
		},
		"Superscripts and Subscripts": {
			"min": "2070",
			"max": "209F"
		},
		"Currency Symbols": {
			"min": "20A0",
			"max": "20CF"
		},
		"Combining Diacritical Marks for Symbols": {
			"min": "20D0",
			"max": "20FF"
		},
		"Letterlike Symbols": {
			"min": "2100",
			"max": "214F"
		},
		"Number Forms": {
			"min": "2150",
			"max": "218F"
		},
		"Arrows": {
			"min": "2190",
			"max": "21FF"
		},
		"Mathematical Operators": {
			"min": "2200",
			"max": "22FF"
		},
		"Miscellaneous Technical": {
			"min": "2300",
			"max": "23FF"
		},
		"Control Pictures": {
			"min": "2400",
			"max": "243F"
		},
		"Optical Character Recognition": {
			"min": "2440",
			"max": "245F"
		},
		"Enclosed Alphanumerics": {
			"min": "2460",
			"max": "24FF"
		},
		"Box Drawing": {
			"min": "2500",
			"max": "257F"
		},
		"Block Elements": {
			"min": "2580",
			"max": "259F"
		},
		"Geometric Shapes": {
			"min": "25A0",
			"max": "25FF"
		},
		"Miscellaneous Symbols": {
			"min": "2600",
			"max": "26FF"
		},
		"Dingbats": {
			"min": "2700",
			"max": "27BF"
		},
		"Miscellaneous Mathematical Symbols-A": {
			"min": "27C0",
			"max": "27EF"
		},
		"Supplemental Arrows-A": {
			"min": "27F0",
			"max": "27FF"
		},
		"Braille Patterns": {
			"min": "2800",
			"max": "28FF"
		},
		"Supplemental Arrows-B": {
			"min": "2900",
			"max": "297F"
		},
		"Miscellaneous Mathematical Symbols-B": {
			"min": "2980",
			"max": "29FF"
		},
		"Supplemental Mathematical Operators": {
			"min": "2A00",
			"max": "2AFF"
		},
		"Miscellaneous Symbols and Arrows": {
			"min": "2B00",
			"max": "2BFF"
		},
		"Glagolitic": {
			"min": "2C00",
			"max": "2C5F"
		},
		"Latin Extended-C": {
			"min": "2C60",
			"max": "2C7F"
		},
		"Coptic": {
			"min": "2C80",
			"max": "2CFF"
		},
		"Georgian Supplement": {
			"min": "2D00",
			"max": "2D2F"
		},
		"Tifinagh": {
			"min": "2D30",
			"max": "2D7F"
		},
		"Ethiopic Extended": {
			"min": "2D80",
			"max": "2DDF"
		},
		"Cyrillic Extended-A": {
			"min": "2DE0",
			"max": "2DFF"
		},
		"Supplemental Punctuation": {
			"min": "2E00",
			"max": "2E7F"
		},
		"CJK Radicals Supplement": {
			"min": "2E80",
			"max": "2EFF"
		},
		"Kangxi Radicals": {
			"min": "2F00",
			"max": "2FDF"
		},
		"Ideographic Description Characters": {
			"min": "2FF0",
			"max": "2FFF"
		},
		"CJK Symbols and Punctuation": {
			"min": "3000",
			"max": "303F"
		},
		"Hiragana": {
			"min": "3040",
			"max": "309F"
		},
		"Katakana": {
			"min": "30A0",
			"max": "30FF"
		},
		"Bopomofo": {
			"min": "3100",
			"max": "312F"
		},
		"Hangul Compatibility Jamo": {
			"min": "3130",
			"max": "318F"
		},
		"Kanbun": {
			"min": "3190",
			"max": "319F"
		},
		"Bopomofo Extended": {
			"min": "31A0",
			"max": "31BF"
		},
		"CJK Strokes": {
			"min": "31C0",
			"max": "31EF"
		},
		"Katakana Phonetic Extensions": {
			"min": "31F0",
			"max": "31FF"
		},
		"Enclosed CJK Letters and Months": {
			"min": "3200",
			"max": "32FF"
		},
		"CJK Compatibility": {
			"min": "3300",
			"max": "33FF"
		},
		"CJK Unified Ideographs Extension A": {
			"min": "3400",
			"max": "4DBF"
		},
		"Yijing Hexagram Symbols": {
			"min": "4DC0",
			"max": "4DFF"
		},
		"CJK Unified Ideographs": {
			"min": "4E00",
			"max": "9FFF"
		},
		"Yi Syllables": {
			"min": "A000",
			"max": "A48F"
		},
		"Yi Radicals": {
			"min": "A490",
			"max": "A4CF"
		},
		"Lisu": {
			"min": "A4D0",
			"max": "A4FF"
		},
		"Vai": {
			"min": "A500",
			"max": "A63F"
		},
		"Cyrillic Extended-B": {
			"min": "A640",
			"max": "A69F"
		},
		"Bamum": {
			"min": "A6A0",
			"max": "A6FF"
		},
		"Modifier Tone Letters": {
			"min": "A700",
			"max": "A71F"
		},
		"Latin Extended-D": {
			"min": "A720",
			"max": "A7FF"
		},
		"Syloti Nagri": {
			"min": "A800",
			"max": "A82F"
		},
		"Common Indic Number Forms": {
			"min": "A830",
			"max": "A83F"
		},
		"Phags-pa": {
			"min": "A840",
			"max": "A87F"
		},
		"Saurashtra": {
			"min": "A880",
			"max": "A8DF"
		},
		"Devanagari Extended": {
			"min": "A8E0",
			"max": "A8FF"
		},
		"Kayah Li": {
			"min": "A900",
			"max": "A92F"
		},
		"Rejang": {
			"min": "A930",
			"max": "A95F"
		},
		"Hangul Jamo Extended-A": {
			"min": "A960",
			"max": "A97F"
		},
		"Javanese": {
			"min": "A980",
			"max": "A9DF"
		},
		"Myanmar Extended-B": {
			"min": "A9E0",
			"max": "A9FF"
		},
		"Cham": {
			"min": "AA00",
			"max": "AA5F"
		},
		"Myanmar Extended-A": {
			"min": "AA60",
			"max": "AA7F"
		},
		"Tai Viet": {
			"min": "AA80",
			"max": "AADF"
		},
		"Meetei Mayek Extensions": {
			"min": "AAE0",
			"max": "AAFF"
		},
		"Ethiopic Extended-A": {
			"min": "AB00",
			"max": "AB2F"
		},
		"Latin Extended-E": {
			"min": "AB30",
			"max": "AB6F"
		},
		"Cherokee Supplement": {
			"min": "AB70",
			"max": "ABBF"
		},
		"Meetei Mayek": {
			"min": "ABC0",
			"max": "ABFF"
		},
		"Hangul Syllables": {
			"min": "AC00",
			"max": "D7AF"
		},
		"Hangul Jamo Extended-B": {
			"min": "D7B0",
			"max": "D7FF"
		},
		"High Surrogates": {
			"min": "D800",
			"max": "DB7F"
		},
		"High Private Use Surrogates": {
			"min": "DB80",
			"max": "DBFF"
		},
		"Low Surrogates": {
			"min": "DC00",
			"max": "DFFF"
		},
		"Private Use Area": {
			"min": "E000",
			"max": "F8FF"
		},
		"CJK Compatibility Ideographs": {
			"min": "F900",
			"max": "FAFF"
		},
		"Alphabetic Presentation Forms": {
			"min": "FB00",
			"max": "FB4F"
		},
		"Arabic Presentation Forms-A": {
			"min": "FB50",
			"max": "FDFF"
		},
		"Variation Selectors": {
			"min": "FE00",
			"max": "FE0F"
		},
		"Vertical Forms": {
			"min": "FE10",
			"max": "FE1F"
		},
		"Combining Half Marks": {
			"min": "FE20",
			"max": "FE2F"
		},
		"CJK Compatibility Forms": {
			"min": "FE30",
			"max": "FE4F"
		},
		"Small Form Variants": {
			"min": "FE50",
			"max": "FE6F"
		},
		"Arabic Presentation Forms-B": {
			"min": "FE70",
			"max": "FEFF"
		},
		"Halfwidth and Fullwidth Forms": {
			"min": "FF00",
			"max": "FFEF"
		},
		"Specials": {
			"min": "FFF0",
			"max": "FFFF"
		},
		"Linear B Syllabary": {
			"min": "10000",
			"max": "1007F"
		},
		"Linear B Ideograms": {
			"min": "10080",
			"max": "100FF"
		},
		"Aegean Numbers": {
			"min": "10100",
			"max": "1013F"
		},
		"Ancient Greek Numbers": {
			"min": "10140",
			"max": "1018F"
		},
		"Ancient Symbols": {
			"min": "10190",
			"max": "101CF"
		},
		"Phaistos Disc": {
			"min": "101D0",
			"max": "101FF"
		},
		"Lycian": {
			"min": "10280",
			"max": "1029F"
		},
		"Carian": {
			"min": "102A0",
			"max": "102DF"
		},
		"Coptic Epact Numbers": {
			"min": "102E0",
			"max": "102FF"
		},
		"Old Italic": {
			"min": "10300",
			"max": "1032F"
		},
		"Gothic": {
			"min": "10330",
			"max": "1034F"
		},
		"Old Permic": {
			"min": "10350",
			"max": "1037F"
		},
		"Ugaritic": {
			"min": "10380",
			"max": "1039F"
		},
		"Old Persian": {
			"min": "103A0",
			"max": "103DF"
		},
		"Deseret": {
			"min": "10400",
			"max": "1044F"
		},
		"Shavian": {
			"min": "10450",
			"max": "1047F"
		},
		"Osmanya": {
			"min": "10480",
			"max": "104AF"
		},
		"Elbasan": {
			"min": "10500",
			"max": "1052F"
		},
		"Caucasian Albanian": {
			"min": "10530",
			"max": "1056F"
		},
		"Linear A": {
			"min": "10600",
			"max": "1077F"
		},
		"Cypriot Syllabary": {
			"min": "10800",
			"max": "1083F"
		},
		"Imperial Aramaic": {
			"min": "10840",
			"max": "1085F"
		},
		"Palmyrene": {
			"min": "10860",
			"max": "1087F"
		},
		"Nabataean": {
			"min": "10880",
			"max": "108AF"
		},
		"Hatran": {
			"min": "108E0",
			"max": "108FF"
		},
		"Phoenician": {
			"min": "10900",
			"max": "1091F"
		},
		"Lydian": {
			"min": "10920",
			"max": "1093F"
		},
		"Meroitic Hieroglyphs": {
			"min": "10980",
			"max": "1099F"
		},
		"Meroitic Cursive": {
			"min": "109A0",
			"max": "109FF"
		},
		"Kharoshthi": {
			"min": "10A00",
			"max": "10A5F"
		},
		"Old South Arabian": {
			"min": "10A60",
			"max": "10A7F"
		},
		"Old North Arabian": {
			"min": "10A80",
			"max": "10A9F"
		},
		"Manichaean": {
			"min": "10AC0",
			"max": "10AFF"
		},
		"Avestan": {
			"min": "10B00",
			"max": "10B3F"
		},
		"Inscriptional Parthian": {
			"min": "10B40",
			"max": "10B5F"
		},
		"Inscriptional Pahlavi": {
			"min": "10B60",
			"max": "10B7F"
		},
		"Psalter Pahlavi": {
			"min": "10B80",
			"max": "10BAF"
		},
		"Old Turkic": {
			"min": "10C00",
			"max": "10C4F"
		},
		"Old Hungarian": {
			"min": "10C80",
			"max": "10CFF"
		},
		"Rumi Numeral Symbols": {
			"min": "10E60",
			"max": "10E7F"
		},
		"Brahmi": {
			"min": "11000",
			"max": "1107F"
		},
		"Kaithi": {
			"min": "11080",
			"max": "110CF"
		},
		"Sora Sompeng": {
			"min": "110D0",
			"max": "110FF"
		},
		"Chakma": {
			"min": "11100",
			"max": "1114F"
		},
		"Mahajani": {
			"min": "11150",
			"max": "1117F"
		},
		"Sharada": {
			"min": "11180",
			"max": "111DF"
		},
		"Sinhala Archaic Numbers": {
			"min": "111E0",
			"max": "111FF"
		},
		"Khojki": {
			"min": "11200",
			"max": "1124F"
		},
		"Multani": {
			"min": "11280",
			"max": "112AF"
		},
		"Khudawadi": {
			"min": "112B0",
			"max": "112FF"
		},
		"Grantha": {
			"min": "11300",
			"max": "1137F"
		},
		"Tirhuta": {
			"min": "11480",
			"max": "114DF"
		},
		"Siddham": {
			"min": "11580",
			"max": "115FF"
		},
		"Modi": {
			"min": "11600",
			"max": "1165F"
		},
		"Takri": {
			"min": "11680",
			"max": "116CF"
		},
		"Ahom": {
			"min": "11700",
			"max": "1173F"
		},
		"Warang Citi": {
			"min": "118A0",
			"max": "118FF"
		},
		"Pau Cin Hau": {
			"min": "11AC0",
			"max": "11AFF"
		},
		"Cuneiform": {
			"min": "12000",
			"max": "123FF"
		},
		"Cuneiform Numbers and Punctuation": {
			"min": "12400",
			"max": "1247F"
		},
		"Early Dynastic Cuneiform": {
			"min": "12480",
			"max": "1254F"
		},
		"Egyptian Hieroglyphs": {
			"min": "13000",
			"max": "1342F"
		},
		"Anatolian Hieroglyphs": {
			"min": "14400",
			"max": "1467F"
		},
		"Bamum Supplement": {
			"min": "16800",
			"max": "16A3F"
		},
		"Mro": {
			"min": "16A40",
			"max": "16A6F"
		},
		"Bassa Vah": {
			"min": "16AD0",
			"max": "16AFF"
		},
		"Pahawh Hmong": {
			"min": "16B00",
			"max": "16B8F"
		},
		"Miao": {
			"min": "16F00",
			"max": "16F9F"
		},
		"Kana Supplement": {
			"min": "1B000",
			"max": "1B0FF"
		},
		"Duployan": {
			"min": "1BC00",
			"max": "1BC9F"
		},
		"Shorthand Format Controls": {
			"min": "1BCA0",
			"max": "1BCAF"
		},
		"Byzantine Musical Symbols": {
			"min": "1D000",
			"max": "1D0FF"
		},
		"Musical Symbols": {
			"min": "1D100",
			"max": "1D1FF"
		},
		"Ancient Greek Musical Notation": {
			"min": "1D200",
			"max": "1D24F"
		},
		"Tai Xuan Jing Symbols": {
			"min": "1D300",
			"max": "1D35F"
		},
		"Counting Rod Numerals": {
			"min": "1D360",
			"max": "1D37F"
		},
		"Mathematical Alphanumeric Symbols": {
			"min": "1D400",
			"max": "1D7FF"
		},
		"Sutton SignWriting": {
			"min": "1D800",
			"max": "1DAAF"
		},
		"Mende Kikakui": {
			"min": "1E800",
			"max": "1E8DF"
		},
		"Arabic Mathematical Alphabetic Symbols": {
			"min": "1EE00",
			"max": "1EEFF"
		},
		"Mahjong Tiles": {
			"min": "1F000",
			"max": "1F02F"
		},
		"Domino Tiles": {
			"min": "1F030",
			"max": "1F09F"
		},
		"Playing Cards": {
			"min": "1F0A0",
			"max": "1F0FF"
		},
		"Enclosed Alphanumeric Supplement": {
			"min": "1F100",
			"max": "1F1FF"
		},
		"Enclosed Ideographic Supplement": {
			"min": "1F200",
			"max": "1F2FF"
		},
		"Miscellaneous Symbols and Pictographs": {
			"min": "1F300",
			"max": "1F5FF"
		},
		"Emoticons": {
			"min": "1F600",
			"max": "1F64F"
		},
		"Ornamental Dingbats": {
			"min": "1F650",
			"max": "1F67F"
		},
		"Transport and Map Symbols": {
			"min": "1F680",
			"max": "1F6FF"
		},
		"Alchemical Symbols": {
			"min": "1F700",
			"max": "1F77F"
		},
		"Geometric Shapes Extended": {
			"min": "1F780",
			"max": "1F7FF"
		},
		"Supplemental Arrows-C": {
			"min": "1F800",
			"max": "1F8FF"
		},
		"Supplemental Symbols and Pictographs": {
			"min": "1F900",
			"max": "1F9FF"
		},
		"CJK Unified Ideographs Extension B": {
			"min": "20000",
			"max": "2A6DF"
		},
		"CJK Unified Ideographs Extension C": {
			"min": "2A700",
			"max": "2B73F"
		},
		"CJK Unified Ideographs Extension D": {
			"min": "2B740",
			"max": "2B81F"
		},
		"CJK Unified Ideographs Extension E": {
			"min": "2B820",
			"max": "2CEAF"
		},
		"CJK Compatibility Ideographs Supplement": {
			"min": "2F800",
			"max": "2FA1F"
		},
		"Tags": {
			"min": "E0000",
			"max": "E007F"
		},
		"Variation Selectors Supplement": {
			"min": "E0100",
			"max": "E01EF"
		},
		"Supplementary Private Use Area-A": {
			"min": "F0000",
			"max": "FFFFF"
		}
	};
	
	document.body.onload = function () { 		
		var sgCodechart = document.getElementById("sg-codechart");
		var temporarTable = document.createElement("div");
		
		// process the json object
		for (var key in codechart){
			if (codechart.hasOwnProperty(key)) {
				
				// get the starting and ending point of table
				var min = parseInt(codechart[key].min,16);
				var max = parseInt(codechart[key].max,16);
				var summ = max - min;
				
				// creating the list items
				var newListElement = document.createElement("li");
				
				// assign the values for further use (onclick)
				newListElement.min = min;
				newListElement.max = max;
				
				var title = document.createTextNode(key);
				newListElement.appendChild(title);
				
				var subTitleWrapper = document.createElement("small"); 
				var subTitle = document.createTextNode(" - " + summ + "char");
				subTitleWrapper.appendChild(subTitle);
				newListElement.appendChild(subTitleWrapper);
				
				// finish the content of the list items
				sgCodechart.appendChild(newListElement);
				
				// create the code chart on click
				newListElement.onclick = function() {			
					var outstring = "";
					for (var i=this.min; i<this.max; i++) {
						charNum = i.toString(16);
						
						while(charNum.length < 4) {
							charNum = "0"+charNum;
						}
						outstring += "<span class='sg-char'><span>&#x"+charNum+";</span>&amp;#x"+charNum+";</span>";
					}
					temporarTable.innerHTML = unescape(outstring);
					this.appendChild(temporarTable);
				};
			}
		}
		
	};
	</script>

</div>	
<?php require_once('includes/bottom.php'); ?>