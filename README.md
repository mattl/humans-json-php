# human.json generator in PHP

1. Get your own website (See: https://indieweb.org/Getting_Started)
2. Edit pals.php to include your own website.
3. Have a good long think about all the human beings you know
4. Make a list of your pals websites and the date (optional) you're endorsing them and make a file called pals.txt

```
http://info.cern.ch/|1990-12-20
https://wjsullivan.net/|2006-12-06
https://mako.cc|2007-07-04
https://evanp.me/|2008-02-21
https://mjg59.dreamwidth.org|2009-12-20
https://tantek.com/|2010-07-18
https://aaronpk.com/|2010-07-18
https://artlung.com/|2024-08-22
https://neatnik.net|2026-03-11
https://example.com/
```

then run:

`php pals.php > human.json`

Now make sure that human.json is available on your website somewhere (ie. the root, or in .well-known if you know what that is) and in your homepage's <head> section add this line:

`<link rel="human-json" href="/human.json">`

Making sure that human.json is indeed at that location.

---

human.json generator in PHP by Matt Lee (https://mat.tl) is marked CC0 1.0. To view a copy of this mark, visit https://creativecommons.org/publicdomain/zero/1.0/

