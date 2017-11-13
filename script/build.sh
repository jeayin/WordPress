echo "Starts building"
mkdir build
mv * build/
tar -cvzf nearby.tar.gz ../* --exclude=../script
rm -r build
