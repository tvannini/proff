import sublime, sublime_plugin
import subprocess
import codecs
import os

class ProffCommand(sublime_plugin.TextCommand):

    def run(self, edit, out = False):

        # ____________________________________ Load settings from plugin configuration ___
        sets = sublime.load_settings("Proff.sublime-settings")
        file = self.view.file_name()
        fext = os.path.splitext(file)
        fext = fext[1][1:] if fext[1] else "" # ____________ Remove dot from extension ___
        incl = sets.get("include")
        excl = sets.get("exclude")
        # _________________________________ File extension is not in the included list ___
        if (incl != None and len(incl) > 0):
            if (fext not in incl):
                return
        # _____________________________________ File extension is in the excluded list ___
        elif (excl != None and len(excl) > 0):
            if (fext in excl):
                return
        # ________________________________________________________ Save caret position ___
        caret = self.view.sel()[0].begin()
        # ___________________________________________________ Make a whole text region ___
        r = sublime.Region(0, self.view.size())
        # ___________________________________________________ Get text from whole view ___
        t = self.view.substr(r)
        # _______________________________________ Create a temp file with view content ___
        tmp_name = sets.get("tmp", "/tmp/proff_tmp")
        tmp_file = codecs.open(tmp_name, "w", "utf-8")
        tmp_file.write(t)
        tmp_file.close()
        # ================================================================================
        # _______________________ Execute Proff on temp file to produce formatted file ___
        # ================================================================================
        if (out):
            cmd = [sets.get("php", "php"),
                   sets.get("proff", sublime.packages_path() + "/Proff/proff.php"),
                   tmp_name,
                   "-i", sets.get("outini", sublime.packages_path() + "/Proff/html.ini"),
                   "-w", '%s' % (sets.get("width", "72")),
                   "-p", "FULL",
                   "-r", os.path.splitext(file)[0] + ".html"]
            p = subprocess.Popen(cmd,
                                 cwd    = os.getcwd(),
                                 stdout = subprocess.PIPE,
                                 stderr = subprocess.PIPE)
            # __________________________________________________________ If got errors ___
            if (p.stderr):
                print p.stderr
            # _________________________________________________________ If got outpout ___
            if p.stdout:
                print p.stdout.read().decode("UTF-8", "replace")
        # ================================================================================
        # ______________________________________ Externally execute Proff on temp file ___
        # ================================================================================
        else:
            # _____________________________________________________ Command parameters ___
            left = ""
            if (sets.get("left") == True):
                left = "-l"
            cmd = [sets.get("php", "php"),
                   sets.get("proff", sublime.packages_path() + "/Proff/proff.php"),
                   tmp_name,
                   "-w", '%s' % (sets.get("width", "72")),
                   "-p", "0",
                   "-r", "",
                   left]
            p = subprocess.Popen(cmd,
                                 cwd    = os.getcwd(),
                                 stdout = subprocess.PIPE,
                                 stderr = subprocess.PIPE)
            # __________________________________________________________ If got errors ___
            if (p.stderr):
                print p.stderr
            # _________________________________________________________ If got outpout ___
            if p.stdout:
                # _______________________________________________ Replace text in view ___
                self.view.replace(edit, r, p.stdout.read().decode("UTF-8", "replace"))
            # ___________________________________________________ Reset caret position ___
            self.view.sel().clear()
            r = sublime.Region(caret, caret)
            self.view.sel().add(r)
            self.view.show_at_center(r)
        # ___________________________________________________________ Unlink temp file ___
        os.unlink(tmp_name)


class ProffoutCommand(sublime_plugin.TextCommand):

    def run(self, edit):
        self.view.run_command("proff", {"out" : True})
