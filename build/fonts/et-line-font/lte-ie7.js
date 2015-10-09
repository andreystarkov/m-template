/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'et-line\'">' + entity + '</span>' + html;
	}
	var icons = {
			'et-mobile' : '&#xe000;',
			'et-laptop' : '&#xe001;',
			'et-desktop' : '&#xe002;',
			'et-tablet' : '&#xe003;',
			'et-phone' : '&#xe004;',
			'et-document' : '&#xe005;',
			'et-documents' : '&#xe006;',
			'et-search' : '&#xe007;',
			'et-clipboard' : '&#xe008;',
			'et-newspaper' : '&#xe009;',
			'et-notebook' : '&#xe00a;',
			'et-book-open' : '&#xe00b;',
			'et-browser' : '&#xe00c;',
			'et-calendar' : '&#xe00d;',
			'et-presentation' : '&#xe00e;',
			'et-picture' : '&#xe00f;',
			'et-pictures' : '&#xe010;',
			'et-video' : '&#xe011;',
			'et-camera' : '&#xe012;',
			'et-printer' : '&#xe013;',
			'et-toolbox' : '&#xe014;',
			'et-briefcase' : '&#xe015;',
			'et-wallet' : '&#xe016;',
			'et-gift' : '&#xe017;',
			'et-bargraph' : '&#xe018;',
			'et-grid' : '&#xe019;',
			'et-expand' : '&#xe01a;',
			'et-focus' : '&#xe01b;',
			'et-edit' : '&#xe01c;',
			'et-adjustments' : '&#xe01d;',
			'et-ribbon' : '&#xe01e;',
			'et-hourglass' : '&#xe01f;',
			'et-lock' : '&#xe020;',
			'et-megaphone' : '&#xe021;',
			'et-shield' : '&#xe022;',
			'et-trophy' : '&#xe023;',
			'et-flag' : '&#xe024;',
			'et-map' : '&#xe025;',
			'et-puzzle' : '&#xe026;',
			'et-basket' : '&#xe027;',
			'et-envelope' : '&#xe028;',
			'et-streetsign' : '&#xe029;',
			'et-telescope' : '&#xe02a;',
			'et-gears' : '&#xe02b;',
			'et-key' : '&#xe02c;',
			'et-paperclip' : '&#xe02d;',
			'et-attachment' : '&#xe02e;',
			'et-pricetags' : '&#xe02f;',
			'et-lightbulb' : '&#xe030;',
			'et-layers' : '&#xe031;',
			'et-pencil' : '&#xe032;',
			'et-tools' : '&#xe033;',
			'et-tools-2' : '&#xe034;',
			'et-scissors' : '&#xe035;',
			'et-paintbrush' : '&#xe036;',
			'et-magnifying-glass' : '&#xe037;',
			'et-circle-compass' : '&#xe038;',
			'et-linegraph' : '&#xe039;',
			'et-mic' : '&#xe03a;',
			'et-strategy' : '&#xe03b;',
			'et-beaker' : '&#xe03c;',
			'et-caution' : '&#xe03d;',
			'et-recycle' : '&#xe03e;',
			'et-anchor' : '&#xe03f;',
			'et-profile-male' : '&#xe040;',
			'et-profile-female' : '&#xe041;',
			'et-bike' : '&#xe042;',
			'et-wine' : '&#xe043;',
			'et-hotairballoon' : '&#xe044;',
			'et-globe' : '&#xe045;',
			'et-genius' : '&#xe046;',
			'et-map-pin' : '&#xe047;',
			'et-dial' : '&#xe048;',
			'et-chat' : '&#xe049;',
			'et-heart' : '&#xe04a;',
			'et-cloud' : '&#xe04b;',
			'et-upload' : '&#xe04c;',
			'et-download' : '&#xe04d;',
			'et-target' : '&#xe04e;',
			'et-hazardous' : '&#xe04f;',
			'et-piechart' : '&#xe050;',
			'et-speedometer' : '&#xe051;',
			'et-global' : '&#xe052;',
			'et-compass' : '&#xe053;',
			'et-lifesaver' : '&#xe054;',
			'et-clock' : '&#xe055;',
			'et-aperture' : '&#xe056;',
			'et-quote' : '&#xe057;',
			'et-scope' : '&#xe058;',
			'et-alarmclock' : '&#xe059;',
			'et-refresh' : '&#xe05a;',
			'et-happy' : '&#xe05b;',
			'et-sad' : '&#xe05c;',
			'et-facebook' : '&#xe05d;',
			'et-twitter' : '&#xe05e;',
			'et-googleplus' : '&#xe05f;',
			'et-rss' : '&#xe060;',
			'et-tumblr' : '&#xe061;',
			'et-linkedin' : '&#xe062;',
			'et-dribbble' : '&#xe063;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-et');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/et-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};