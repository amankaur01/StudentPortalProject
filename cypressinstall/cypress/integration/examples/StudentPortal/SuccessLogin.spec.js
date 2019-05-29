describe('This is my first Cypress test', () => {
    Cypress.Cookies.debug(true)

    it('Openining Student Portal', () => {
        cy.visit('http://localhost/StudentPortal/index.php')
        
    });

    it('Check Element should be Visble', () => {
        cy.get(':nth-child(3) > .form-control').should('exist')
        cy.get(':nth-child(4) > .form-control').should('exist')
        cy.get('.btn').should('exist')
    });

    it('Type Automatic value into the Textbox', () => {
        cy.get(':nth-child(3) > .form-control').type('amankaur@algomau.ca')
        cy.get(':nth-child(4) > .form-control').type('password1234')
        cy.get('.btn').click()
    });

    it('Check Validation Visible ', () => {
        cy.get('.btn').should('contain', 'Profile')
        cy.get('.btn').click()
    });
    
})