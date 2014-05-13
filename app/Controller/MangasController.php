<?php
App::uses('AppController', 'Controller');
/**
 * Mangas Controller
 *
 * @property Manga $Manga
 * @property PaginatorComponent $Paginator
 */
class MangasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Manga->recursive = 0;
		$this->set('mangas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Manga->exists($id)) {
			throw new NotFoundException(__('Invalid manga'));
		}
		$options = array('conditions' => array('Manga.' . $this->Manga->primaryKey => $id));
		$this->set('manga', $this->Manga->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Manga->create();
			if ($this->Manga->save($this->request->data)) {
				$this->Session->setFlash(__('The manga has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manga could not be saved. Please, try again.'));
			}
		}
		$editions = $this->Manga->Edition->find('list');
		$types = $this->Manga->Type->find('list');
		$authors = $this->Manga->Author->find('list');
		$kinds = $this->Manga->Kind->find('list');
		$kinds2s = $this->Manga->Kinds2->find('list');
		$kinds3s = $this->Manga->Kinds3->find('list');
		$this->set(compact('editions', 'types', 'authors', 'kinds', 'kinds2s', 'kinds3s'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Manga->exists($id)) {
			throw new NotFoundException(__('Invalid manga'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Manga->save($this->request->data)) {
				$this->Session->setFlash(__('The manga has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manga could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manga.' . $this->Manga->primaryKey => $id));
			$this->request->data = $this->Manga->find('first', $options);
		}
		$editions = $this->Manga->Edition->find('list');
		$types = $this->Manga->Type->find('list');
		$authors = $this->Manga->Author->find('list');
		$kinds = $this->Manga->Kind->find('list');
		$kinds2s = $this->Manga->Kinds2->find('list');
		$kinds3s = $this->Manga->Kinds3->find('list');
		$this->set(compact('editions', 'types', 'authors', 'kinds', 'kinds2s', 'kinds3s'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Manga->id = $id;
		if (!$this->Manga->exists()) {
			throw new NotFoundException(__('Invalid manga'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Manga->delete()) {
			$this->Session->setFlash(__('The manga has been deleted.'));
		} else {
			$this->Session->setFlash(__('The manga could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
	
	
	public function genre($id){
		return $this->Kind->find('first', array('conditions'=>array('kinds_id'=>$id)));
	}}
