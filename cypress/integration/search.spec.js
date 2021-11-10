describe('Search Feature test', () => {
    it('Available search', () => {
        cy.visit('/')
        cy.get('input[name=search]').type('the hat')
        cy.get('#search').submit()
        cy.contains('The Hat')
    })
    it('Null search', () => {
        cy.visit('/')
        cy.get('#search').submit()
    })
    it('Wrong search', () => {
        cy.visit('/')
        cy.get('#search').submit()
    })
})