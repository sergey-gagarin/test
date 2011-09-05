<?php


echo '<h3>The most useful Git commands</h3>';

echo 'git init';

echo 'git clone from-repo-url';

echo 'git status';

echo 'git branch  // to see all branches';

echo 'git branch b_01 - to crate a new branch';

echo 'git checkout b_01';

echo 'git pull from-repo-url';

ech

?>

<ol>
    <li>git init </li>
    <li>git clone git@github.com:sergey-gagarin/test.git</li>
    <li>git status</li>
    <li>git branch  // to see all branches</li>
    <li>git branch -a </li>
    <li>git branch b_01 - to crate a new branch</li>
    <li>git checkout b_01</li>
    <li>git-pull - Fetch from and merge with another repository or a local branch</li>
    <li>git pull from-repo-url</li>
    <li>Or: git remote add name_for_use git@github.com:sergey-gagarin/test.git</li>
    <li>then: git push name_for_use</li>
    <li>push and create a new branch: git push name_for_use b_01 // - the new branch in the repo</li>
    <li>

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (master)
$ cd ../git_test_set3

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git branch
* b_02
  master

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git remote add git_test git@github.com:sergey-gagarin/test.git

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git pull git_test
From github.com:sergey-gagarin/test
 * [new branch]      b_01       -> git_test/b_01
 * [new branch]      b_02       -> git_test/b_02
 * [new branch]      master     -> git_test/master
You asked to pull from the remote 'git_test', but did not specify
a branch. Because this is not the default configured remote
for your current branch, you must specify a branch on the command line.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$_</li>
    <li>1: git fetch --all</li>
    <li>2: git branch -a:
      $ git branch -a
      * b_02
      master
      remotes/git_test/b_01
      remotes/git_test/b_02
      remotes/git_test/master
  
    </li>
    <li>3: create a local branch -? from remote</li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ol>

<ol>
    <li>Merge from remote</li>
    <li>1. git checkout b_01 // do changes or create a new file</li>
    <li>In case of a new files (commit -a all changes but not a new files-??):</li>
    <li>The switch -a with git-commit DOES NOT ADD files that are not currently being tracked by git.
WHEREAS; ‘git add .‘ adds files not being tracked by git for commit as well.</li>
    
    <li>2. git commit -a // commit the changes </li>
    <li>3. git push git_test  // push it up in the git_test/b_01 branch</li>
    <li>Time to get the changes from b_01 into b_02</li>
    <li>4. cd ../git_test_set3  </li>
    <li>5. git fetch git_test // get all the changes</li>
    <li>6. git merge remotes/git_test/b_01  // !!! merge changes from b_01 into b_02, conflict !!</li>
    <li>Conflicts:</li>
    <li>7. Open with PSPad and fix</li>
    <li>8. git add index.php</li>
    <li>9. git commit -a // auto-message : 'merged ...'</li>
    <li>Done</li>
</ol>
