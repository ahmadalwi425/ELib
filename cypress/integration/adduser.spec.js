describe('Login test', () => {
    const uuid = () => Cypress._.random(0, 1e6)
    const id = uuid()
    const testname = `testname${id}`
    beforeEach(()=>{
        cy.visit('/login')
        cy.get('input[name=username]').type('admin')
        cy.get('input[name=password]').type('admin123')
        cy.get('form').submit()
        cy.get('#manage').click()
        // cy.wait(3000)
        cy.get('#adduser').click()
        
        // cy.get('#myModal').click()
    })
    it('Add user', () => {
        cy.get('input[name=username]').type(testname)
        cy.get('input[name=password]').type(testname)
        cy.get('#formadd').submit()
        // cy.contains('User Successfully Added')
    })
    it('username null', () => {
        cy.get('input[name=password]').type(testname)
        cy.get('#formadd').submit()
        // cy.contains('Please fill out this field.')
    })
    it('password null', () => {
        cy.get('input[name=username]').type(testname)
        cy.get('#formadd').submit()
        // cy.contains('Please fill out this field.')
    })
})