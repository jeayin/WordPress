echo "Starts building php build"
mkdir build
mv * build/
tar -cvzf nearby.tar.gz build/* --exclude=../script --exclude=../_git-repositories-cache --exclude=../repositoryData
rm -r build/
echo "Compressed tar created."
