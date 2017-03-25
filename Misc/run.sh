for (( j=0; j <= 7; ++j ))
do
	for (( i=1; i <= 10; ++i ))
	do
	    echo "INSERT INTO \`sudorooms\`.\`room\`(\`RoomNum\`, \`isFree\`, \`servicereq\`, \`isOpen\`, \`staffaccess\`) VALUES('$j$i','yes', 'NA', 'no', 'yes');"
	done
done
