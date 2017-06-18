function recent(json) {document.write(''); for (var i = 0; i < numposts; i++) {var entry = json.feed.entry[i];var posttitle = entry.title.$t;var posturl;if (i == json.feed.entry.length) break;for (var k = 0; k < entry.link.length;k++){
if(entry.link[k].rel=='replies'&&entry.link[k].type=='text/html'){var commenttext=entry.link[k].title;var commenturl=entry.link[k].href;}
if (entry.link[k].rel == 'alternate') {posturl = entry.link[k].href;break;}}var thumburl;try {thumburl=entry.media.url;}catch (error)


{
s=entry.content.$t;a=s.indexOf("<img");b=s.indexOf("src=\"",a);c=s.indexOf("\"",b+5);d=s.substr(b+5,c-b-5);if((a!=-1)&&(b!=-1)&&(c!=-1)&&(d!="")){
thumburl=d;} else thumburl='http://gamexmod.com/js/blogspot/nothumb.jpg';

}

var postdate = entry.published.$t;var cdyear = postdate.substring(0,4);var cdmonth = postdate.substring(5,7);var cdday = postdate.substring(8,10);var monthnames = new Array();monthnames[1] = "Jan";monthnames[2] = "Feb";monthnames[3] = "Mar";monthnames[4] = "Apr";monthnames[5] = "May";monthnames[6] = "Jun";monthnames[7] = "Jul";monthnames[8] = "Aug";monthnames[9] = "Sep";monthnames[10] = "Oct";monthnames[11] = "Nov";monthnames[12] = "Dec";document.write('');

document.write('<li><div class="item-content">');

if(showpostthumbnails==true) 
document.write('<div class="item-thumbnail" style="display: block;float: left;height: 65px;margin: 0 0.5em 0 0;width: 65px;"><a href="'+posturl+'"><img class="thumbnail" src="'+thumburl+'" title="'+posttitle+'" alt="'+posttitle+'" width="72px" height="72px"/></a></div>');
   

var towrite='';var flag=0;
document.write('<div class="item-title"><b><a href="'+posturl+'">'+posttitle+'</a></div><div class="item-snippet"></div></b>');

document.write('<span class="meta">');

document.write(towrite);

document.write('</span></div><div style="clear: both;"></div></li>');

document.write('<div class="fix"></div>');
if(displayseparator==true) 
if (i!=(numposts-1))
document.write('');
}document.write('<div style="float:right;font-size:0px;bottom:0;right:0;position:absolute;"></div>');



}