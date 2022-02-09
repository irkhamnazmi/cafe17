
function showNotification() {	

	if (Notification.permission !== "granted") {		
		Notification.requestPermission();
	} else {		
		const myNoti = new Notification('Notification Title', {
			body: 'This is my notification',
			// icon: 'ICON_URL',
			// image: 'IMAGE_URL'
			
		});
	}
};