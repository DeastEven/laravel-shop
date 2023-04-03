class SaveForm {
    constructor(btn,form) {
        this.$btn = btn
        this.$form = form
        this.submitForm = this.submitForm.bind(this)
        this.init()
    }
    submitForm(){
        this.$form.submit()
    }
    init(){
        console.log(this.$form)
        this.$btn.addEventListener('click', this.submitForm)
    }
}
document.addEventListener('DOMContentLoaded', () => {
    const saveBtn = document.getElementById('save-form-btn')
    const createForm = document.getElementById('create-form')
    if (saveBtn!=null){
        new SaveForm(saveBtn,createForm)
    }
})
