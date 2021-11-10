describe('Login test', () => {
    it('wrong username', () => {
        cy.visit('/login')
        cy.get('input[name=username]').type('wrong')
        cy.get('input[name=password]').type('admin123')
        cy.get('form').submit()
        cy.contains('Log in')
    })
    it('wrong password', () => {
        cy.visit('/login')
        cy.get('input[name=username]').type('admin')
        cy.get('input[name=password]').type('wrong')
        cy.get('form').submit()
        cy.contains('Log in')
    })
    it('not fill', () => {
        cy.visit('/login')
        cy.get('form').submit()
        cy.contains('Log in')
    })
    it('true account', () => {
        cy.visit('/login')
        cy.get('input[name=username]').type('admin')
        cy.get('input[name=password]').type('admin123')
        cy.get('form').submit()
        cy.get('#logout').contains('Log Out')
    })
})