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

    Imagine, for example, to have a text like this:

(Text start)
>                            ***************
>                            * Lorem ipsum *
>                            ***************
>
>     Lorem ipsum dolor sit amet, consectetur
>     adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
>      - Ut enim ad minim veniam,
>        quis nostrud
>        exercitation ullamco     laboris nisi ut aliquip     ex ea commodo consequat.
>      - Duis aute
>        irure dolor in reprehenderit in
>        voluptate velit esse cillum dolore
>        eu fugiat nulla pariatur.
>
>        1. Sed   ut   perspiciatis   unde   omnis   iste   natus   error   sit  voluptatem   accusantium
>           doloremque laudantium, totam rem
>           aperiam,
>
>           eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
>
>        2. Nemo enim ipsam voluptatem
>           quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
>           eos qui ratione voluptatem
>           sequi nesciunt.
>
>     Neque porro: quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
>                  numquam eius modi tempora incidunt ut labore et
>                  dolore magnam
>                  aliquam quaerat voluptatem.
>
>             ...........
>             . Ut enim .
>             ...........
>
>      Ad minima veniam,
>     quis nostrum exercitationem ullam
>     corporis suscipit laboriosam, nisi ut
>     aliquid ex ea commodi consequatur?
>
>                                   ~---~
>
>     1914 ~ translation by H. Rackham ~
>
>          "On the other hand, we
>          denounce with righteous
>          ~indignation~ and ~dislike~ men who are so beguiled and demoralized by the charms of pleasure of the moment,
>          so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame
>          belongs to those who fail in their duty
>          through weakness
>          of will, which is the same as saying through shrinking
>          from toil and pain."
(Text end)

    It will be trasformed by PRoff in this way:

(Text start)
                             ***************
                             * Lorem ipsum *
                             ***************

      Lorem ipsum dolor sit amet, consectetur adipisicing elit,  sed  do
      eiusmod tempor incididunt ut labore et dolore magna aliqua.
       - Ut enim ad minim  veniam,  quis  nostrud  exercitation  ullamco
         laboris nisi ut aliquip ex ea commodo consequat.
       - Duis aute irure dolor in reprehenderit in voluptate velit  esse
         cillum dolore eu fugiat nulla pariatur.

         1.  Sed  ut  perspiciatis  unde  omnis  iste  natus  error  sit
            voluptatem  accusantium  doloremque  laudantium,  totam  rem
            aperiam,

            eaque  ipsa  quae  ab  illo  inventore  veritatis  et  quasi
            architecto beatae vitae dicta sunt explicabo.

         2. Nemo enim ipsam voluptatem quia voluptas sit aspernatur  aut
            odit aut fugit, sed quia consequuntur magni dolores eos  qui
            ratione voluptatem sequi nesciunt.

      Neque porro: quisquam est, qui dolorem ipsum quia dolor sit  amet,
                   consectetur, adipisci velit,  sed  quia  non  numquam
                   eius modi tempora incidunt ut labore et dolore magnam
                   aliquam quaerat voluptatem.

              ...........
              . Ut enim .
              ...........

       Ad minima veniam,
      quis nostrum exercitationem ullam  corporis  suscipit  laboriosam,
      nisi ut aliquid ex ea commodi consequatur?

                                    ~---~

      1914 ~ translation by H. Rackham ~

           "On the other hand, we denounce with righteous  ~indignation~
           and ~dislike~ men who are so beguiled and demoralized by  the
           charms of pleasure of the moment, so blinded by desire,  that
           they cannot foresee the pain and trouble that  are  bound  to
           ensue; and equal blame belongs to those  who  fail  in  their
           duty through weakness of will, which is the  same  as  saying
           through shrinking from toil and pain."
(Text end)

    The transformed text is still a valid source for the same format and
    both  source  and  result  file  are   clearly   readable,   without
    text-extraneous elements: result file is  just  better-looking  than
    the source one.


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

