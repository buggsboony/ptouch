#!/bin/bash

#install stuff
what=${PWD##*/}
what2=pcopy
extension=.php
#peut être extension vide

echo "Set executable..."
chmod +x $what$extension
#echo "lien symbolique vers usr bin"
sudo ln -s "$PWD/$what$extension" /usr/bin/$what
sudo ln -s "$PWD/$what2$extension" /usr/bin/$what2
echo "done."
