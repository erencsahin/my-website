// app.js
new Vue({
    el: '#iletisim',
    data: {
        formData: {
            name: '',
            surname:'',
            email: '',
            message: '',
        },
    },
    methods: {
        submitForm() {
            // Form gönderildiğinde bu fonksiyon çalışacak
            // Gerekli kontrol işlemlerini yapabilirsiniz

            // Örneğin, e-posta formatını kontrol edebiliriz:
            if (!this.isValidEmail(this.formData.email)) {
                return;
            }

            alert('Gönderildi,teşekkür ederiz.')
            // Form verilerini başka bir sayfada görüntülemek için localStorage'e kaydediyoruz
            
            
        },
        showComplaints(){
            localStorage.setItem('formData', JSON.stringify(this.formData));
            window.location.href='veriler.html';
        },
        clearForm() {
            // Formu temizleme işlemi
            this.formData.name = '';
            this.formData.surname='';
            this.formData.email = '';
            this.formData.message = '';
        },
        isValidEmail(email) {
            // E-posta formatını kontrol eden fonksiyon
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        },
    },
});
