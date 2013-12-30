import urllib2
from bs4 import BeautifulSoup, SoupStrainer
# from starflow import utils
import re

# doc = ['<html><head><title>Page title</title></head>',
       # '<body><p id="firstpara" align="center">This is paragraph <b>one</b>.',
       # '<p id="secondpara" align="blah">This is paragraph <b>two</b>.',
       # '</html>']

url = 'http://www.straightdope.com/index.php';
page = urllib2.urlopen(url);
# print page.read();

doc = BeautifulSoup(page);

divs = doc.findAll("div",id="recent_additions");

teasers = []

for div in divs:
	for d in div.findAll("div","teaser"):
		teasers.append(d)
		
for teaser in teasers:
	link = teaser.findAll("a");
	print link[0]



