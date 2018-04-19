using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.EntityFrameworkCore;
using blog.Data;
using blog.Models;
using Microsoft.AspNetCore.Authorization;

namespace blog.Controllers
{
    public class ArticleController : Controller
    {
        private readonly ApplicationDbContext _context;

        public ArticleController(ApplicationDbContext context)
        {
            _context = context;
        }

        // GET: Article
        public ActionResult Index()
        {
            return RedirectToAction("List");
        }

        
        public ActionResult List()
        {
            var articles = _context.Articles
                .Include(a => a.Author).ToList();
            return View(articles);
        }

        // GET: Article/Details/5
        [HttpGet]
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return StatusCode(500);
            }

            var article = _context.Articles
                .Include(a => a.Author)
                .First(m => m.Id == id);
            if (article == null)
            {
                return StatusCode(500);
            }

            return View(article);
        }

        [Authorize]
        public ActionResult Create()
        {
            return View();
        }

       [HttpPost]
       [Authorize]
        public ActionResult Create(Article article)
        {
       
            if (ModelState.IsValid)
            {
                //get user Id
                var authorId = _context.Users
                    .Where(u => u.UserName == this.User.Identity.Name)
                    .First()
                    .Id;

                //set articles Author
                article.AuthorId = authorId;

                //save article
                _context.Articles.Add(article);
                _context.SaveChanges();
                return RedirectToAction("Index");


            }
            return View(article);
        }


        // GET: Article/Edit/5
        [HttpGet]
        public IActionResult Edit(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }
            //get article from databse
            var article =_context.Articles
                .Where(m => m.Id == id)
                .First();
            //check if article exist
            if (article == null)
            {
                return NotFound();
            }
            //create view model
            var model = new ArticleViewModel();
            model.Id = article.Id;
            model.Title = article.Title;
            model.Content = article.Content;

            return View(model);
        }

        // POST: Article/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        public ActionResult Edit(ArticleViewModel model)
        {
           
            if (ModelState.IsValid)
            {
                //get the article
                var article = _context.Articles
                    .FirstOrDefault(a => a.Id == model.Id);
                //set new properties
                article.Title = model.Title;
                article.Content = model.Content;



                //Save changes
                _context.Update(article);
                _context.SaveChanges();


                return RedirectToAction("Index");
            }
         
            return View(model);
        }
        private bool isUserAuthorizedToEdit(Article article)
        {
            bool isAdmin = this.User.IsInRole("Admin");
            bool isAuthor = article.isAuthor(this.User.Identity.Name);

            return isAdmin || isAuthor;
        }

        // GET: Article/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return NotFound();
            }

            var article = _context.Articles
                .Include(a => a.Author)
                .First(m => m.Id == id);

            if (isUserAuthorizedToEdit(article)== false)
            {
                return Forbid();
            }

            if (article == null)
            {
                return NotFound();
            }

            return View(article);
        }

        // POST: Article/Delete/5
        [HttpPost, ActionName("Delete")]
        public ActionResult DeleteConfirmed(int id)
        {
            var article =  _context.Articles.Include(a=>a.Author).First(m=>m.Id==id);

            if (article == null)
            {
                return NotFound();
            }

            _context.Articles.Remove(article);
             _context.SaveChangesAsync();

            return RedirectToAction(nameof(Index));
        }

        private bool ArticleExists(int id)
        {
            return _context.Articles.Any(e => e.Id == id);
        }
    }
}
