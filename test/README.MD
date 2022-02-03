
Links
-------

Font info: 
	https://wakamaifondue.com/

Convert fonts to Base64: 
	https://hellogreg.github.io/woff2base/

https://thetrevorharmon.com/blog/how-to-prepare-and-use-variable-fonts-on-the-web
https://github.com/zachleat/glyphhanger


Css properties to manage fonts
------------------------------
	font-variation-settings: 'wght' 100;
	font-variation-settings: 'wght' 600, 'ital' 1;
	font-variation-settings: 'ital' 1;
	font-variation-settings: 'slnt' -10;



Unicode-ranges
-------------

cyrillic
	U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116

cyrillic-ext
	U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F

latin-ext
	U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF

latin
	U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD

latin,cyrillic
	U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116, U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD

latin,latin-ext,cyrillic
	U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116, U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF, U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
	

Create subset
----------

`pyftsubset` docs: https://fonttools.readthedocs.io/en/latest/subset/index.html

```bash
pyftsubset "RobotoMono-regulat-vf.ttf" \
--unicodes="U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116, U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF, U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD" \
--layout-features="" \
--text-file="../../_subset-symbols.txt" \
--flavor="woff2" \
--output-file="RobotoMono-vf[filesubset].woff2"
```

```bash
pyftsubset "Roboto-vf[wdth,wght].ttf" \
--text-file="../../for-compile/_subset-symbols.txt" \
--layout-features="" \
--flavor="woff2" \
--output-file="Roboto-vf[wdth,wght]-subset[file].woff2"
```

