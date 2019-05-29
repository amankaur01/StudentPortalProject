describe('This is my first Cypress test', () => {
    Cypress.Cookies.debug(true)

    it('Openining Student Portal', () => {
        cy.visit('http://localhost/StudentPortal/index.php')
        
    });

    it('Click on Sign up page', () => {
        cy.get('a').click()
    });

    it('Register Values', () => {
        cy.get(':nth-child(3) > .row > :nth-child(1) > .form-control').type('AmanDeep')
        cy.get(':nth-child(3) > .row > :nth-child(2) > .form-control').type('D')
        cy.get(':nth-child(4) > .row > :nth-child(1) > .form-control').type('kaur')
        cy.get(':nth-child(4) > .row > :nth-child(2) > .form-control').type('amankaur@algomau.ca')
        cy.get(':nth-child(5) > .row > :nth-child(1) > :nth-child(1)').click()
        cy.get(':nth-child(5) > .row > :nth-child(2) > .form-control').type('199654156')
        cy.get(':nth-child(6) > .row > :nth-child(1) > .form-control').type('Algoma University')
        cy.get(':nth-child(6) > .row > :nth-child(2) > .form-control').type('Mobile Development course')
        cy.get(':nth-child(7) > .row > :nth-child(1) > .form-control').type('2018')
        cy.get(':nth-child(7) > .row > :nth-child(2) > .form-control').type('2019')
        cy.get('#password').type('password1234')
        cy.get(':nth-child(8) > .row > :nth-child(2) > .form-control').type('password1234')
        cy.get('.btn').click()
    });

    it('Check Successful Registration', () => {
        
    });
    
})