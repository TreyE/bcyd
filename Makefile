website.zip: copy_constitution
	zip -r website.zip website/*

copy_constitution:
	cp BCYDConstitution.doc website/
