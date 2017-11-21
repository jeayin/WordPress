echo "Starts building php build"
mkdir build
mv * build/
cd build
tar -cvzf nearby.tar.gz * --exclude=../script --exclude=../_git-repositories-cache --exclude=../repositoryData
cd ..
rm -r build/
echo "Compressed tar created."
