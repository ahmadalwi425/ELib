describe('Login test', () => {
    beforeEach(()=>{
        
        
        // cy.get('#myModal').click()
    })
    it('Borrow before login', () => {
        cy.visit('/')
        cy.get('#moredetail').click()
        cy.get('#mustlogin').click()
        cy.get('input[name=username]').type('customer')
        cy.get('input[name=password]').type('customer123')
        cy.get('form').submit()
        cy.get('#moredetail').click()
        cy.get('#borrow').click()
        // cy.contains('User Successfully Added')
    })
    it('Borrow login first', () => {
        cy.visit('/login')
        cy.get('input[name=username]').type('customer')
        cy.get('input[name=password]').type('customer123')
        cy.get('form').submit()
        cy.get('#moredetail').click()
        cy.get('#borrow').click()
        // cy.contains('User Successfully Added')
    })
})