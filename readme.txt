                       .-----------------------.
                       | PRoff - Personal Roff |
                       '-----------------------'


>                                         Document edited by ~PRoff 2.0~
>                        Text: http://tvannini.github.io/proff/site/soft
>                        HTML: http://tvannini.github.io/proff/site/full


  » Current version: 2.0
  » PRoff site: http://tvannini.github.io/proff
  » Download: http://tvannini.github.io/proff
  » Documentation: http://tvannini.github.io/proff
  » Informations: tvannini@gmail.com


    ~ Content ~

    0. ...... Preamble
    1. ...... Licensing
    2. ...... How PRoff works
    3. ...... Formatting syntax


 0. ~ Preamble ~

    This project was born from the problem of writing clear, consistent,
    good-looking, web-able documentation.

    After working for a while with LATEX, *roff, WYSIWYG  editors,  HTML
    and WIKICode, I came up with a brand new solution: I just wanted  to
    definitively wipe tags out.

    PRoff, my Personal Roff, is the result  of  my  effort  and  I  hope
    someone will find it useful.  If  you  have  ideas,  suggestions  or
    questions please mail to tvannini@gmail.com.


 1. ~ Licensing ~

    PRoff - Copyright (C) 2007, Tommaso Vannini (<tvannini@gmail.com>)

    PRoff is free software; you can redistribute  it  and/or  modify  it
    under the terms of the GNU General Public License  as  published  by
    the Free Software Foundation; either version 3 of  the  License,  or
    (at your option) any later version. PRoff is distributed in the hope
    that it will be useful, but WITHOUT ANY WARRANTY; without  even  the
    implied warranty of MERCHANTABILITY  or  FITNESS  FOR  A  PARTICULAR
    PURPOSE. See the GNU General Public License for more details.

    You should have received a copy of the GNU  General  Public  License
    along with this program. If not, see <http://www.gnu.org/licenses/>.


 2. ~ How PRoff works ~

    The idea is to identify a set of criteria to beautify a  text,  with
    no need of tags or other text-extraneous elements.

    One only rule: ~ feeding a processed document as a  source,  process
    must result in the same document ~.

    This document, for example, as you see it, is  the  source  and  the
    result at the same time.

    See PRoff at work:
     <http://tvannini.github.io/proff/site/sample.html>

    Sample will compare a raw text file:
     <http://tvannini.github.io/proff/site/lorem-raw.txt>
    with 3 different formatting stages of the same file:
     . PRoffed: <http://tvannini.github.io/proff/site/lorem-proffed.txt>
     . Soft: <http://tvannini.github.io/proff/site/soft/lorem.html>
     . Full: <http://tvannini.github.io/proff/site/full/lorem.html>


 3. ~ Formatting syntax ~

    Document text can be written considering a few tricks that will help
    PRoff to respect and rightly understand your document style.

    Here for "graphic" element is intended  a  character  (or  block  of
    characters) matching regular expression "\W+".

     - All in-paragraph multiple spaces will be reduced to one.
     - Line breaks will not break paragraphs.
     - All paragraphs larger than line width will be justified.
     - Blank lines will be respected and they break paragraphs.
     - Start each unordered list element with a "graphic" char or  block
       and sibling space(s), then indent next lines.
     - Start each ordered list element with a number, a optional sibling
       "graphic" char or block and space(s), then indent next lines.
     - All indentation changes, not recognized as un/ordered lists, will
       cause a line break. - In  other  words:  with  the  exception  of
       un/ordered lists elements first line, all  rows  of  a  paragraph
       will have the same source indentation.
     - Lines starting with a ">" will not be processed and they will  be
       added to text as they are.
     - All text bounded by a "~" will be displayed as black in soft  and
       full HTML rendering
     - Text  surrounded  on  4  sides  by  "graphic"  elements  will  be
       displayed as bordered in full HTML rendering.

