<?php


?>


<h3>The workflow!</h3>
<ol>
    <li>1. given repositary address.</li>
    <li>2. upload the public key</li>
    <li>3. create a new project dir and run: git init</li>
    <li>4. run: git clone URL</li>
    <li>5. git branch -a</li>
    <li>6. git checkout remotes/develop</li>
    <li>7. git branch my_dev // - create a local new branch</li>
    <li>7+ git checkout my_dev // !!!!</li>
    <li>8. some changes</li>
    <li>9. run: git add file1.php file2.php // ??? add --all ??</li>
    <li>10.run: git commit -a -m 'my commit!' </li>
    <li>11.run: git remote add git_test</li>
    <li>12.run: git push git_test my_dev // - will create a new branch in the repositary!</li>
    <li>Done !</li>
    <li>The changes from my_dev can be merged and tested on Senior Pro comp</li>
    <li>To get the changes:</li>
    <li>1. git fetch git_test</li>
    <li>1+ get pull git_test // ?? should merge from ?? remotes/develop into my_dev ?? </li>
    <li>2. git checkout my_dev</li>
    <li>3. git merge remotes/git_test/develop // will merge all te changes !</li>
    <li>4. open PSPad and fix the conflicts // ?? if multiple ??</li>
    <li>5. git add index.php // add files with resolved conflicts</li>
    <li>6. git commit -a // with automatic message 'merged from such and such!'</li>
    <li>Done. Up to date and Ready for the next push !!!</li>
    <li></li>
    <li></li>
    <li></li>
</ol>



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
    <li><h3>Or: git remote add git_test git@github.com:sergey-gagarin/test.git</h3></li>
    <li>then: git push git_test</li>
    <li><h3>push and create a new branch: git push git_test b_01 // - the new branch in the repo</h3></li>
    <li>

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (master)<br/>
$ cd ../git_test_set3<br/>

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)<br/>
$ git branch<br/>
* b_02<br/>
  master<br/>

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)<br/>
$ git remote add git_test git@github.com:sergey-gagarin/test.git<br/>

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)<br/>
$ git pull git_test<br/>
From github.com:sergey-gagarin/test<br/>
 * [new branch]      b_01       -> git_test/b_01<br/>
 * [new branch]      b_02       -> git_test/b_02<br/>
 * [new branch]      master     -> git_test/master<br/>
You asked to pull from the remote 'git_test', but did not specify<br/>
a branch. Because this is not the default configured remote<br/>
for your current branch, you must specify a branch on the command line.<br/>

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)<br/>
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
    <li><h3>Merge from remote</h3></li>
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


<ol>
    <li>Try to create a new branch from remote ? or a new branch and merge from remote</li>
    <li>1. Create a new file, add, push to git_test/b_01</li>
    <li>2. In b_02: git checkout remotes/git_test/b_01 // - ok</li>
    <li>3-. (--) git branch b_033fr // from remote  (- NO new file visible! -)</li>
    <li>3++. git fetch git_test  // !!!! Ok </li>
    <li>4. git checkout remotes/git_test/b_01</li>
    <li>5. git branch b_044fr</li>
    <li>6. git checkout b_044fr // OK ! the new file testing_branching.php is there !</li>
    <li>Done !</li>
</ol>







<div>
 <pre>
serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02
$ git branch -a                                         
* b_02                                                  
  master                                                
  remotes/git_test/b_01                                 
  remotes/git_test/b_02                                 
  remotes/git_test/master                               

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)     
$ git merge remotes/git_test/b_01                             
Already up-to-date.                                           
                   
serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)     
$ git checkout remotes/git_test/b_01                          
Note: checking out 'remotes/git_test/b_01'.                   
                                                              
You are in 'detached HEAD' state. You can look around, make experimental  
changes and commit them, and you can discard any commits you make in this 
state without impacting any branches by performing another checkout.      
                                                                          
If you want to create a new branch to retain commits you create, you may  
do so (now or later) by using -b with the checkout command again. Example:
                                                                          
  git checkout -b new_branch_name                                         
                                                                          
HEAD is now at 21e89a9... Merge branch 'master' into b_01                 
                                                                          
serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((21e89a9...))         
$ git checkout b_02                                                       
Previous HEAD position was 21e89a9... Merge branch 'master' into b_01     
Switched to branch 'b_02'                                                
                                                                         
serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)               
$ git status                                                            

# On branch b_02
nothing to commit (working directory clean)

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ gitk


serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ cd ../git_test_set2

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git status
# On branch b_01
# Changed but not updated:
#   (use "git add <file>..." to update what will be committed)
#   (use "git checkout -- <file>..." to discard changes in working directory)
#
#       modified:   gitcommands.php
#
no changes added to commit (use "git add" and/or "git commit -a")

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git add gitcommands.php

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git commit -a
[b_01 2f2d85f] new file with add
 1 files changed, 6 insertions(+), 4 deletions(-)

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git push git_test
Counting objects: 5, done.
Delta compression using up to 2 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 412 bytes, done.
Total 3 (delta 2), reused 0 (delta 0)
To git@github.com:sergey-gagarin/test.git
   2866244..2f2d85f  b_01 -> b_01

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ cd ../git_test_set3

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git merge remotes/git_test/b_01
Already up-to-date.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ cd ../git_test_set2

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git commit -a
[b_01 f6afd88] 05Sept
 1 files changed, 9 insertions(+), 27 deletions(-)
 rewrite index.php (80%)

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ cd ../git_test_set3

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git merge remotes/git_test/b_01
Already up-to-date.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ cd ../git_test_set2

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git push git_test
Counting objects: 5, done.
Delta compression using up to 2 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 310 bytes, done.
Total 3 (delta 2), reused 0 (delta 0)
To git@github.com:sergey-gagarin/test.git
   2f2d85f..f6afd88  b_01 -> b_01

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ cd ../git_test_set3

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git merge remotes/git_test/b_01
Already up-to-date.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git fetch git_test/b_01
fatal: 'git_test/b_01' does not appear to be a git repository
fatal: The remote end hung up unexpectedly

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git fetch remotes/git_test/b_01
fatal: 'remotes/git_test/b_01' does not appear to be a git repository
fatal: The remote end hung up unexpectedly

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git fetch
fatal: No remote repository specified.  Please, specify either a URL or a
remote name from which new revisions should be fetched.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git fetch remotes/git_test
fatal: 'remotes/git_test' does not appear to be a git repository
fatal: The remote end hung up unexpectedly

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git fetch git_test
remote: Counting objects: 11, done.
remote: Compressing objects: 100% (6/6), done.
remote: Total 9 (delta 5), reused 7 (delta 3)
Unpacking objects: 100% (9/9), done.
From github.com:sergey-gagarin/test
   21e89a9..f6afd88  b_01       -> git_test/b_01

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git merge remotes/git_test/b_01
Auto-merging index.php
CONFLICT (content): Merge conflict in index.php
Automatic merge failed; fix conflicts and then commit the result.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02|MERGING)
$ git add index.php

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02|MERGING)
$ git commit -a
[b_02 c7eb005] Merge remote branch 'remotes/git_test/b_01' into b_02

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git status
# On branch b_02
nothing to commit (working directory clean)

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git branch
* b_02
  master

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git branch -a
* b_02
  master
  remotes/git_test/b_01
  remotes/git_test/b_02
  remotes/git_test/master

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ cd ../git_test_set2/

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git commit -a
[b_01 baa5796] new file ??
 1 files changed, 12 insertions(+), 6 deletions(-)

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git add testing_branching.php

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git commit -a -m 'new file again!'
[b_01 8427dcf] new file again!
 1 files changed, 3 insertions(+), 0 deletions(-)
 create mode 100644 testing_branching.php

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ git push git_test
Counting objects: 8, done.
Delta compression using up to 2 threads.
Compressing objects: 100% (6/6), done.
Writing objects: 100% (6/6), 847 bytes, done.
Total 6 (delta 3), reused 0 (delta 0)
To git@github.com:sergey-gagarin/test.git
   f6afd88..8427dcf  b_01 -> b_01

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set2 (b_01)
$ cd ../git_test_set3

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git branches -a
git: 'branches' is not a git command. See 'git --help'.

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git branch -a
* b_02
  master
  remotes/git_test/b_01
  remotes/git_test/b_02
  remotes/git_test/master

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_02)
$ git checkout remotes/git_test/b_01
Note: checking out 'remotes/git_test/b_01'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by performing another checkout.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -b with the checkout command again. Example:

  git checkout -b new_branch_name

HEAD is now at f6afd88... 05Sept

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((f6afd88...))
$ git branch b_033fr

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((f6afd88...))
$ git checkout b_033fr
Switched to branch 'b_033fr'

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_033fr)
$ git branch -a
  b_02
* b_033fr
  master
  remotes/git_test/b_01
  remotes/git_test/b_02
  remotes/git_test/master

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_033fr)
$ git fetch git_test
remote: Counting objects: 8, done.
remote: Compressing objects: 100% (3/3), done.
remote: Total 6 (delta 3), reused 6 (delta 3)
Unpacking objects: 100% (6/6), done.
From github.com:sergey-gagarin/test
   f6afd88..8427dcf  b_01       -> git_test/b_01

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_033fr)
$ git checkout remotes/git_test/b_01
Note: checking out 'remotes/git_test/b_01'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by performing another checkout.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -b with the checkout command again. Example:

  git checkout -b new_branch_name

HEAD is now at 8427dcf... new file again!

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((8427dcf...))
$ git branch b_044fr

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((8427dcf...))
$ git chckout b_044fr
git: 'chckout' is not a git command. See 'git --help'.

Did you mean this?
        checkout

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((8427dcf...))
$ git chekout b_044fr
git: 'chekout' is not a git command. See 'git --help'.

Did you mean this?
        checkout

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 ((8427dcf...))
$ git checkout b_044fr
Switched to branch 'b_044fr'

serg@SERG2-PC /c/xampp/htdocs/test01/git_test_set3 (b_044fr)
$
</pre>
</div>