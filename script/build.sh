echo "Starts building php build"
mkdir build
mv * build/
tar -cvzf nearby.tar.gz $0/* --exclude=../script --exclude=../_git-repositories-cache --exclude=../repositoryData
rm -r ../build
