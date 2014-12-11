roi

Return on Investment calculator spec

Application Objective 
---------------------
Demonstrate PHP , OOP and requirement analysing skills.

Return on Investment calculator spec

We need to develop a return on investment calculator webpage that our users can use to anonymously evaluate the benefits of our software on our website. Please spend at least an hour on this but you are not obliged to spend any more time. The intent is really to evaluate your approach, 

your code and how you synthesise the requirements. 

Please note, these figures are fabricated.

Have a look at http://www.microsoft.com/en-us/dynamics/crm-roi-calculator.aspx for a great 

example .

Create a simple report that shows transactions for a merchant id specified as command line argument.

Technology

You can use any technology you choose, but PHP must be part of the solution. 

User story 

The user needs to be able to enter a few values and get feedback on what the costs of the implementation would be. The user is presented with questions, and then to complete a few answers to understand costs.

Questions

1) How many employees are there in your organisation?  

Result: Store number of employees

2) Reduce under performance: Every organisation has a number of under-performers. The real challenge is to identify under-performance and then deal with it appropriately (either by improving Potential Benefit or headcount) We will help you identify underperformers quickly. 

Typically, 10% of an organisation's employees will underperform.  Our software will typically identify your underachievers within the first 3 months.

What is your average cost per employee for under-performance? (accept value in pounds)  

Result: 10% the  employees multiplied by this value

User Feedback: Your saving is {} 

3) Reduce attrition costs 

Nowadays, people expect to be valued, developed and given regular feedback. If people are not managed effectively or rewarded appropriately, they will leave. In professional services, this cost is much higher due to the higher average salaries, amount of training invested, client relationships built and the high cost of recruiting new people. Typically, an organisation will pay 17% attrition costs over and above the employee's salary. What is the attrition rate of your 

organisation? (accept a percentage)  

Result: Take attrition percentage, calculate the number of employees provided in question 1 (so if they enter 10% and the employee number was 50, the answer is 5) and multiply by the average salary (£25000*17%). 

Feedback: Assuming an average salary of£25000    we will save you {}

4) Fewer wasted chargeable hours

We enable the removal of paper based processes and the high administrative burden for Fee Earners. ObjectiveManager transitions objective setting from a once yearly ‘paperwork exercise’ to a way of working, increasing focus on key business goals. If every Fee-Earner saved just 2 hours per annum, they can employ that time more effectively. What if your fee-earners re-gained just 2 chargeable hours each (@£150hr) every year? What percentage of your employees are fee earners?

Result: Take input and multiply 2 hours @£150

Feedback: You could save {} for your fee earners

5) Fewer wasted administration hours

The average cost of one HR Officer’s time running and collating paper based systems for up to 500 people is £7,800. This figure, we know is very conservative and tends to be much higher in professional services firms where the review process can be challenging and iterative. What is the size of your HR department?

Result: Take input, calculate ratio of HR dept. to employees. If HR employees administers <=500 employees, then cost is £7800 per HR employee. If the HR employees administers >=500 employees, then add £15.6 increase per employee over and above the £7800. 

Feedback: We can save you ()

Final Feedback

Total: Provide total savings

Typical cost of implementation: £20 000

Your return on investment in the first year will be {}

---------------------
**Assumptions:** 

* Assuming an average salary of£25000 
* avarege cost of managing 500 employee is £7800 per HR employee 

---------------------

### HOW TO RUN APPLICATION?

    1) import roi repository to the local document root
    2) From the browser, execute index.php file 
    3) All calulation added based on onblur even of the input box, so use tab key after entering entering values to the input boxes, to get calculations. 
  
----
Developed By: [Himanshu Patel]
