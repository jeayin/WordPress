echo "Starts building php build"
mkdir build
mv * build/
tar -cvzf nearby.tar.gz ../build/* --exclude=../script
rm -r build
