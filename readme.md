                       #=======================#
                       # PRoff - Personal Roff #
                       #=======================#

>                                         Document edited by ~PRoff 2.0~
>                     Text: <http://tvannini.github.io/proff/site/soft/>
>                     HTML: <http://tvannini.github.io/proff/site/full/>

 * Current version: 2.0
 * PRoff site: <http://tvannini.github.io/proff>
 * Download: <http://tvannini.github.io/proff>
 * Documentation: <http://tvannini.github.io/proff>
 * Informations: <tvannini@gmail.com>


   ~ Content ~

   0. Preamble
   1. Licensing
   2. Project description
   3. Script description
     3.1. Pre-processor
     3.2. Post-processor
   4. How to run PRoff
     4.1. From command line
     4.2. From text editor
   5. Document formatting syntax
   6. Todo


 0 ~ Preamble ~

   This project was born from the problem of writing clear,  consistent,
   good-looking, web-able documentation. I think it's impossible to  use
   WYSIWYG editors, letting them to  fill  up  documents  with  tons  of
   invisible, inconsistent, useless format information.

   I worked with LATEX and *roff for a  while  and  editors  now  called
   WYGIWYS: absolutely a new result  quality  but  it  was  not  perfect
   yet... Writing doc is not only coding but  also  composing:  I  can't
   compose on a page full of text-extraneous informations, editing on  a
   place and reading and checking result on another place.

   At the end I was writing my documents in HTML: no bad for result  but
   what a stress! A good job was made with WIKI composing language, much
   easier and readable than HTML, but rewriting tagging system  was  not
   my solution: I just wanted to wipe tags out.

   PRoff, Personal Roff, is the result of my effort and I  hope  someone
   will find it useful. If you  have  ideas,  suggestions  or  questions
   please mail to <algoraro@users.sourceforge.net>.


 1 ~ Licensing ~

   PRoff - Copyright (C) 2007, Tommaso Vannini (<tvannini@gmail.com>)

   PRoff is free software; you can  redistribute  it  and/or  modify  it
   under the terms of the GNU General Public License as published by the
   Free Software Foundation; either version 3 of  the  License,  or  (at
   your option) any later version. PRoff is distributed in the hope that
   it will be useful, but WITHOUT ANY WARRANTY; without even the implied
   warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See
   the GNU General Public License for more details.

   You should have received a copy of the  GNU  General  Public  License
   along with this program. If not, see <http://www.gnu.org/licenses/>.


 2 ~ Project description ~

   The idea of this project is not new: on the contrary it is very  old!
   The goal is to realize a  program  to  parse  text  to  beautify  it,
   without need of tags or  other  text-extraneous  elements.  One  only
   rule: ~ using a processed document as a source, process  must  result
   in the same document ~.

   This document, for example, as you see it,  is  the  source  and  the
   result at the same time.

   Imagine, for example, to have a text like this:

(Text start)
>                            ***************
>                            * Lorem ipsum *
>                            ***************
>
>     Lorem ipsum dolor sit amet, consectetur adipisicing
>     elit, sed do eiusmod tempor incididunt ut labore et dolore
>     magna aliqua.
>      - Ut enim ad minim veniam, quis nostrud exercitation ullamco
>        laboris nisi ut aliquip ex ea commodo consequat.
>      - Duis aute irure dolor in reprehenderit in voluptate velit
>        esse cillum dolore eu fugiat nulla pariatur.
>
>        1. Sed ut perspiciatis unde omnis iste natus error sit
>           voluptatem accusantium doloremque laudantium, totam rem
>           aperiam, eaque ipsa quae ab illo inventore veritatis et
>           quasi architecto beatae vitae dicta sunt explicabo.
>
>        2. Nemo enim ipsam voluptatem quia voluptas sit aspernatur
>           aut odit aut fugit, sed quia consequuntur magni dolores
>           eos qui ratione voluptatem sequi nesciunt.
>
>     Neque porro: quisquam est, qui dolorem ipsum quia dolor sit
>                  amet, consectetur, adipisci velit, sed quia non
>                  numquam eius modi tempora incidunt ut labore et
>                  dolore magnam aliquam quaerat voluptatem.
>
>      Ut enim ad minima veniam,
>     quis nostrum exercitationem ullam
>     corporis suscipit laboriosam, nisi ut
>     aliquid ex ea commodi consequatur?
>
>                                   ---o---
>
>     1914 translation by H. Rackham
>          =========================
>
>          "On the other hand, we denounce with righteous
>          indignation and dislike men who are so beguiled
>          and demoralized by the charms of pleasure of the moment,
>          so blinded by desire, that they cannot foresee the pain
>          and trouble that are bound to ensue; and equal blame
>          belongs to those who fail in their duty through weakness
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
            aperiam, eaque ipsa quae  ab  illo  inventore  veritatis  et
            quasi architecto beatae vitae dicta sunt explicabo.

         2. Nemo enim ipsam voluptatem quia voluptas sit aspernatur  aut
            odit aut fugit, sed quia consequuntur magni dolores eos  qui
            ratione voluptatem sequi nesciunt.

      Neque porro: quisquam est, qui dolorem ipsum quia dolor sit  amet,
                   consectetur, adipisci velit,  sed  quia  non  numquam
                   eius modi tempora incidunt ut labore et dolore magnam
                   aliquam quaerat voluptatem.

       Ut enim ad minima veniam,
      quis nostrum exercitationem ullam  corporis  suscipit  laboriosam,
      nisi ut aliquid ex ea commodi consequatur?

                                    ---o---

      1914 translation by H. Rackham
           =========================

           "On the other hand, we denounce  with  righteous  indignation
           and dislike men who are so beguiled and  demoralized  by  the
           charms of pleasure of the moment, so blinded by desire,  that
           they cannot foresee the pain and trouble that  are  bound  to
           ensue; and equal blame belongs to those  who  fail  in  their
           duty through weakness of will, which is the  same  as  saying
           through shrinking from toil and pain."
(Text end)

   The transformed text is still a valid source for the same format  and
   both  source  and  result  file   are   clearly   readable,   without
   text-extraneous elements: result file is just better-looking than the
   source one.


 3 ~ Script description ~

   The  script  works  in  two  steps:  file  text  is   passed   to   a
   "pre-processor" that transforms it into an array; then the  array  is
   passed to a "post-processor" that composes final text from it.


   3.1 ~ Pre-processor ~

       First  script,  pre-processor,  splits  text  into  an  array  of
       paragraphs and returns each paragraph indentation and first  line
       indentation. The script respects blank  lines,  un/ordered  lists
       and graphical elements.


   3.2 ~ Post-processor ~

       Post-processor  script  formats  each  paragraph  according  with
       indentation, first line  indentation  and  global  width  and  it
       composes final text.

       If marking up is requested post-processor runs some extra regular
       expression to:
        - make href links from URLs
        - make mailto links from email addresses
        - mark as bold double-intensity text (~text~)

       HTML rendering is offered in two flavours: "soft" or  "full".  If
       soft one  is  requested  text  is  returned  in  <pre>  tags  for
       preserving mono-spaced format in HTML.

       Full one, instead, returns document divided into paragraphs (<p>)
       with indentation and first  line  indentation  style  properties.
       Graphic surrounded text will be rendered  as  framed  and  double
       intensity characters ("~") will be stripped out from black text.


 4 ~ How to run PRoff ~

   PRoff is a batch program: it runs without any  user  interaction.  It
   can produce files or send text on STDOUT, recoverable by pipes.

   Tipically it can be run from command  line  or  from  within  another
   program like a text editor.

   When PRoff starts  it  will  look  for  configuration  file.  Default
   configuration file is proff.ini,  in  the  same  directory  as  PRoff
   executable or script. Command line passed  parameters  will  override
   INI directives.


   4.1 ~ From command line ~

       You can run PRoff both as PHP script and as WIN32 executable.  In
       order  to  run  it  as  PHP  script,  you  need  a  PHP   working
       installation.

       WI32 executable - Command line:
        proff.exe <source> [<option> [<value>] ...]

       PHP script - Command line:
        php.exe proff.php <source> [<option> [<value>] ...]

       Where:

          <source>
             Source text file to format.
          <option> <value>
             One or more of the following options and values:
             -h Displays help informations (no
             <value> is needed).
             -i Configuration file. Set <value> to INI file to  use.  -r
                Result file. If a valid file name is passed as  <value>,
                result text will be written to file,  else  result  text
                will be output to STDOUT. If no full  path  is  provided
                for  <result_file>,  processed  file  position  will  be
                determinated starting from source file directory.
             -w  Page  width.  Set  <value>  to  number  of   characters
                (columns) to justify text to (default is 72).
             -p Markup (production type). Passed <value> can be  one  of
                following  values:  [0|FALSE]......  Text  is  formatted
                without markup [1|TRUE|SOFT].. Text  is  formatted  with
                soft markup [FULL]......... Text is formatted with  full
                markup (default value is FALSE).
             -o Open result file (no <value> is needed). -m Send as mail
             (no <value> is needed).

       Options -r, -w, -p, -o, -m and many  more  ones  can  be  set  by
       configuration file directives. See proff.ini file for a  complete
       configuration directives description.

       The  easiest  way  to  use  PRoff  is  to  prepare  one  or  more
       configuration files containing all needed parameters. With  PRoff
       package  are  provided  three  configuration   files   (text.ini,
       soft.ini, full.ini) that can be used to make, respectively, text,
       soft HTML and full HTML processing.

       To use one of the provided configuration files just run
        path/to/proff.exe -i full.ini
       from command line.

       Configuration file proff.ini is the default  one,  used  when  no
       other file is passed: it contains all detailed directives and  it
       can be used to start creating new configuration files.


   4.2 ~ From text editor ~

       PRoff can be easily integrated in most text editors, just setting
       an external program execution and passing  ambient  variables  to
       PRoff executable.

       For example, for  integrating  PRoff  in  Notepad++  text  editor
       (<http://notepad-plus.sourceforge.net/uk/site.htm>)   just    add
       following lines  to  file  notepad++/shortcuts.xml  configuration
       file:

>         <UserDefinedCommands>
>            <Command name="Format as text"
>                     Ctrl="yes"
>                     Alt="yes"
>                     Shift="no"
>                     Key="84">
>             path/to/proff.exe "$(FULL_CURRENT_PATH)" -i text.ini -o
>            </Command>
>            <Command name="Format as HTML"
>                     Ctrl="yes"
>                     Alt="yes"
>                     Shift="no"
>                     Key="72">
>             path/to/proff.exe "$(FULL_CURRENT_PATH)" -i soft.ini -o
>            </Command>
>            <Command name="Format as full HTML"
>                     Ctrl="yes"
>                     Alt="yes"
>                     Shift="no"
>                     Key="88">
>             path/to/proff.exe "$(FULL_CURRENT_PATH)" -i full.ini -o
>            </Command>
>         </UserDefinedCommands>

       Now it will be possible, from  within  Notepad++,  calling  PRoff
       directly, pressing CTRL+ALT+T (for text format), CTRL+ALT+H  (for
       soft HTML format) and CTRL+ALT+X (for full HTML format).


 5 ~ Document formatting syntax ~

   Document text can be written considering a few tricks that will  help
   PRoff to respect and rightly understand your document style.

   Here for "graphic" element is  intended  a  character  (or  block  of
   characters) matching regular expression "\W+".

    - All in-paragraph multiple spaces will be reduced to one.
    - Line breaks will not break paragraphs.
    - All paragraphs longer than line width will be justified.
    - Blank lines will be respected and break paragraphs.
    - Start each unordered list  element  with  a  "graphic"  block  and
      sibling space(s), then indent next line.
    - Start each ordered list element with a number, a optional  sibling
      "graphic" block, space(s) and then indent next line.
    - All indentation changes, not recognized as un/ordered lists,  will
      cause a line break. -  In  other  words:  with  the  exception  of
      un/ordered lists elements first line, all rows of a paragraph will
      have the same source indentation.
    - Lines starting with a ">" will not be processed and they  will  be
      added to text as they are.
    - All text bounded by a "~" will be displayed as black in  soft  and
      full HTML rendering
    - Text  surrounded  by  "graphic"  elements  will  be  displayed  as
      bordered in full HTML rendering.


 6 ~ Todo ~

    - Document structure recognition and indexes linking.
    - PDF production.
    - Standard *roff capabilities integration  to  get  hyphenation  and
      space balancing in paragraphs formatting.

