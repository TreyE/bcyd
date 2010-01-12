upload: website.zip
	sftp -b upload_commands bcydorg@bcyd.org
	rm website.zip

website.zip: copy_constitution
	cd website && zip -r ../website.zip ./*
	rm website/BCYDConstitution.html

copy_constitution:
	cp BCYDConstitution.html website/
