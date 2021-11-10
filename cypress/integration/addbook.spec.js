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
        cy.get('#booklink').click()
        cy.get('#booklink').click()
        cy.get('#addbook').click()
        
        // cy.get('#myModal').click()
    })
    it('Add Book', () => {
        cy.get('input[name=title]').type(testname)
        cy.get('#description').type(testname)
        cy.get('input[name=stock]').type('3')
        cy.get('#formbook').submit()
        // cy.contains('Book Successfully Added')
    })
    it('title null', () => {
        cy.get('#description').type(testname)
        cy.get('input[name=stock]').type('3')
        cy.get('#formbook').submit()
        // cy.contains('Please fill out this field.')
    })
    it('description null', () => {
        cy.get('input[name=title]').type(testname)
        cy.get('input[name=stock]').type('3')
        cy.get('#formbook').submit()
        // cy.contains('Please fill out this field.')
    })
    it('stock null', () => {
        cy.get('input[name=title]').type(testname)
        cy.get('#description').type(testname)
        cy.get('#formbook').submit()
        // cy.contains('Please fill out this field.')
    })
})