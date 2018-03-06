### a. Create 5 different automated test cases for the things that you think are important to automate.
I'd automate these tests:
1. Opening of the main page and checking controls 
2. Searching with default options and with user’s options (check-in and check-out dates, type of room). 
3. Pagination 
4. Work of sorting 
5. Work of filters 

To be honest, I’ve never worked with codeception, composer, php and git. At my current job I use FitNesse. 
Unfortunately, 72 hours were not enough to do all from the beginning, I got stuck with some issues, but I tried to do my best :) So, here is just one test, it checks the main page.

### b. Explain in detail why you choose these tests.
1. If the main page is not available, we can’t really use the site. The page is stable enough; it is possible to automate a little test to check it.
2. It is the main functionality; also options and searching field are stable enough, that this part can be automated.
3. Important part of the site. It is possible to create a case, where we will see pagination, can click on pages and check that all works.
4. Sorting is also stable thing and one of base function. By test we can check how a sorting option affects on search results.
5. Filters are also important function and it is stable, doesn’t change every time. 

### c. What are the limitations of this test.
1. How the page looks, depends on screen size. It is necessary to do several tests.
2. Not possible to check that absolutely all of hotels were found correctly.
3. We can’t expect how many pages will be in the pagination.
4. Not possible to check if all hotels were sorted correctly, because number of hotels is changing very often.
5. We can’t check absolutely all combinations of filters.
 
### d. Generate test results for every run.
Done. You can see in the _output folder.

### e. Describe why you choose this method technology.
Honestly, because it was my task  I’d prefer to use FitNesse, I’m more familiar with it and could do described tests faster.


### f. Please push your project to a git repository.
Done

 
### g. Attach the link to your test results.
Done. You can see results in _output folder 
https://github.com/UserAnna/Trvg_tst/tree/master/tests/_output 


### h. Add a small step by step tutorial to execute your automated test.

•	copy the tests to your codeception project (should be \vendor\bin\tests\acceptance)
•	make sure, that in acceptance.suite.yml you have correct settings. 

For PHPBrowser should be:

actor: AcceptanceTester

modules:
  			 
         enabled:
       
       - \Helper\Acceptance
      			 
             - PHPBrowser:
      				   
                 url: 'https://www.trivago.de'
                 
For ChromeDriver

actor: AcceptanceTester

modules:

  			  enabled:
          

       		       - \Helper\Acceptance
                  
                  - WebDriver:
                  
                     url: 'https://trivago.de'
                     
                     window_size: false # disabled in ChromeDriver
                     
                     port: 9515
                     
                     browser: chrome
                     
            	        capabilities:
                      
               		       chromeOptions: 
                         
                			       args: ['--test-type']
                             

•	To use chromedriver at first do this in command line: chromedriver --url-base=/wd/hub

•	To build tests: codecept build

•	To run tests: codecept run acceptance

•	To run tests with a report: codecept run acceptance --html

•	You can see results in _output folder


